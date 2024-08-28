<!-- resources/views/vendor/backpack/crud/fields/multi_chunked_upload.blade.php -->
<div>
    <label>{!! $field['label'] !!}</label>
    <input type="file" id="video-upload" multiple style="display:none;">
    <button type="button" id="upload-button" class="btn btn-primary">Select Videos</button>
    <div id="progress-container"></div>
    <input type="hidden" name="video_paths" id="video-paths" value="{{ old('video_paths', json_encode($entry->video_paths ?? [])) }}">
</div>

<script src="https://cdn.jsdelivr.net/npm/resumablejs/resumable.js"></script>
<script>
    var videoPaths = JSON.parse(document.getElementById('video-paths').value || '[]');

    var r = new Resumable({
        target: '{{ route("course.upload-video") }}', // Target route for chunked upload
        query: {_token: '{{ csrf_token() }}'}, // CSRF token
        fileParameterName: 'video', // File parameter name
        chunkSize: 1 * 1024 * 1024, // 1MB chunks
        simultaneousUploads: 3, // Upload up to 3 chunks at the same time
        testChunks: true, // Check for already uploaded chunks
        maxFiles: undefined, // No limit on the number of files
    });

    document.getElementById('upload-button').addEventListener('click', function() {
        document.getElementById('video-upload').click();
    });

    document.getElementById('video-upload').addEventListener('change', function(event) {
        if (event.target.files.length > 0) {
            r.addFiles(event.target.files); // Add files to Resumable.js
            r.upload(); // Start upload
        }
    });

    r.on('fileProgress', function(file) {
        var progress = Math.floor(file.progress() * 100);
        var progressBar = document.getElementById('progress-bar-' + file.uniqueIdentifier);

        if (!progressBar) {
            var progressContainer = document.getElementById('progress-container');
            progressBar = document.createElement('progress');
            progressBar.id = 'progress-bar-' + file.uniqueIdentifier;
            progressBar.max = 100;
            progressContainer.appendChild(progressBar);
        }

        progressBar.value = progress;
    });

    r.on('fileSuccess', function(file, response) {
        var res = JSON.parse(response);
        videoPaths.push(res.path); // Save the video path
        document.getElementById('video-paths').value = JSON.stringify(videoPaths); // Store paths in hidden field
    });

    r.on('fileError', function(file, message) {
        alert('Upload failed: ' + message);
    });
</script>
