@extends('layout.layoutAuth')

@section('content')
    <div class="container-fluid vh-200 d-flex justify-content-center align-items-center background">
        <div class="login-box p-4 my-5">
            <div class="text-center mb-4 text-light">
                <img src="../img/Switch-container.png" alt="TURUQ Logo" class="mb-3 fromIMg">
                <h4>Welcome {{ Auth::user()->name }}</h4>
                <p>Please Complete Your Registerations with this Form</p>
            </div>

            <form method="post" action="{{ route('userFormSubmit') }}" enctype="multipart/form-data">
                @csrf

                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Name" name="Fullname" id="username">
                    <label for="username" class="form__label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                        Full Name</label>

                    @error('Fullname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form__group field d-flex">
                    <select class="form__field" name="userstatus" required>

                        <option value="option1"> <label for="name" class="form__label">


                                User academic status</label></option>

                        <option class="text-dark" value="Graduate">Graduate</option>
                        <option class="text-dark" value="Student">Student</option>


                    </select>

                    @error('userstatus')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>



                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Name" name="specialization" id="username">
                    <label for="username" class="form__label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                        Specialization</label>
                    @error('specialization')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Name" name="subspecialty" id="email">
                    <label for="email" class="form__label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                        </svg>
                        Subspecialty</label>

                    @error('subspecialty')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__group field">
                    <input type="input" class="form__field" placeholder="Name" name="university" id="phone">
                    <label for="phone" class="form__label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-mortarboard" viewBox="0 0 16 16">
                            <path
                                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                            <path
                                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                        </svg>
                        University</label>

                    @error('university')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__group field">
                    <input type="date" class="form__field" placeholder="Name" name="graduationDate" id="">
                    <label for="password" class="form__label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-mortarboard" viewBox="0 0 16 16">
                            <path
                                d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                            <path
                                d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                        </svg>
                        Graduation date</label>

                    @error('graduationDate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="Name" name="rate">
                    <label for="name" class="form__label">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-percent" viewBox="0 0 16 16">
                            <path
                                d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        </svg>
                        GPA</label>
                    @error('rate')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form__group field d-flex">
                    <select class="form__field" id="academy-type" name="systemUsage" required>

                        <option value="option1"> <label for="name" class="form__label">


                                Why you using system</label></option>

                        <option class="text-dark" value="Training">Training</option>
                        <option class="text-dark" value="Work">Work</option>
                        <option class="text-dark" value="Volunteer">Volunteer</option>

                    </select>



                    @error('systemUsage')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div id="content-container" class="container justify-content-center align-items-center">
                    <!-- Dynamic content will be rendered here -->


                </div>



                <div class="mt-4 col-md-12">
                    <!--Margin Space-->
                </div>
                <div class="d-grid">
                    <button type="submit" class="LogINBtn" name="submit">Submit</button>
                </div>


            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('academy-type');
            const contentContainer = document.getElementById('content-container');

            selectElement.addEventListener('change', function() {
                const selectedValue = this.value;
                renderContent(selectedValue);
            });

            function renderContent(option) {
                // Clear existing content
                contentContainer.innerHTML = '';

                // Render new content based on the selected option
                switch (option) {
                    case 'Training':
                        contentContainer.innerHTML = `
                    <div class="form__group field d-flex">
                    <select class="form__field" name="Trainingusage" required>
    
                        <option value="option1"> <label for="name" class="form__label">
                            
    
                                What are you intended in training</label></option>
    
                        <option class="text-dark" value="HeadTraining">Training on a head of project</option>
                        <option class="text-dark" value="SummerTraining">Summer training 1-3 months</option>
                        <option class="text-dark" value="Sessions">Attend training sessions</option>
                        <option class="text-dark" value="Senior">Last year training</option>
                        @error('Trainingusage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
    
                    </select>
                </div>
                `;
                        break;
                    case 'Work':
                        contentContainer.innerHTML = `
                    
                    <input type="file" class="my-5" name="files" placeholder="Uplaod your cv">
                `;
                        break;
                    case 'Volunteer':
                        contentContainer.innerHTML = `
                    <input type="file" class="my-5" name="files" placeholder="Uplaod your cv">
                `;
                        break;
                    default:
                        contentContainer.innerHTML = '<p>Please select a valid option.</p>';
                }
            }
        });
    </script>
@endsection
