<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CV Builder</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <style>
        .red_star{
          color: red;
        }
        hr.solid {
          border-top: 3px solid #000000;
        }
        .card-body {
            padding: 0;
        }
      </style>
    </head>
    <body>
        <x-nav/>

      <div class="container">
        <div class="card text-dark" >
            <div class="card-header d-flex justify-content-between">
                <div><h3>Demo CV</h3></div>
                
                <div></div>
            </div>
            <div class="card-body" style="background-color: aliceblue">

                <div class="row">
                    <div class="col-xl-4 col-md-12 col-sm-12" style="background-color: rgb(231, 231, 231)">

                    <div class="d-flex justify-content-center">

                        <div class="d-flex flex-column bd-highlight mb-5 mt-5">
                            <div> <img src="{{ asset('image/shanto.jpg') }}" alt="" height="250" width="250" class="rounded-circle"></div>
                            <div class="bg-dark p-2 mt-5 rounded-pill" style="color:white; text-align:center;font-weight: bold;">CONTACT ME</div>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                    </svg></div>
                                    <div class="col-10"><p >shanto.mir2208@gmail.com</p></div>
                                </div>

                                <div class="row">
                                    <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                    </svg></div>
                                    <div class="col-10"><p >01531548338</p></div>
                                </div>

                                <div class="row">
                                    <div class="col-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                                    </svg></div>
                                    <div class="col-10"><p>Hazipara, Dhaka-1217</p></div>
                                </div>


                            </div>

                            <div class="bg-dark p-2 mt-5 mb-5 rounded-pill" style="color:white; text-align:center;font-weight: bold;">EDUCATION</div>

                            <div>
                                <p style="font-weight: bold; margin-bottom: 0;">Bs.c Computer science and engineering</p>
                                <p style="font-weight: bold; margin-bottom: 0;">East west University</p>
                                <p style="margin-top: 0;">2018 - 2022</p>
                            </div>

                            <div>
                                <p style="font-weight: bold; margin-bottom: 0;">Higher Secondary Certificate</p>
                                <p style="font-weight: bold; margin-bottom: 0;">Willes Little Flower College</p>
                                <p style="margin-top: 0;">2015 - 2017</p>
                            </div>

                            <div>
                                <p style="font-weight: bold; margin-bottom: 0;">Secondary School Certificate</p>
                                <p style="font-weight: bold; margin-bottom: 0;">National Bank public school</p>
                                <p style="margin-top: 0;">2014 - 2015</p>
                            </div>


                            <div class="bg-dark p-2 mt-5 mb-4 rounded-pill" style="color:white; text-align:center;font-weight: bold;">SKILLS</div>

                            <ul>
                                <li>
                                    <span>Java, C, C++ , PHP, Python</span>
                                </li>
                                <li>
                                    <span>Laravel, Django</span>
                                </li>
                                <li>
                                    <span>HTML, CSS, js, jQuery, Bootstrap</span>
                                </li>

                                <li>
                                    <span>MySQL, Mongodb</span>
                                </li>
                            </ul>

                        </div>


                    </div>

                    </div>
                    <div class="col-xl-8 col-md-12 col-sm-12">

                        <p style=" font-size: 550%"> <span style="font-weight: bold; margin-bottom: 0;"> <sub>Md.</sub> </span>  <br> <span style="margin-top: -30px;">Mostafijur Rahman</span></p>
                        <p style=" font-size: 250% ;margin-top: -30px;">Software Engineer</p>
                            
                        <div class="row mt-4">
                            <div class="col-4">
                                <h3 style="font-weight: bold; font-size: 250%">Experience</h3>
                            </div>
                            <div class="col-8 mt-2">
                                <sub style="margin-top: -10px;"><hr class="solid"></sub>
                            </div>
                        </div>

                        <div class="row mt-4 p-4 ">

                            
                            <div class="d-flex justify-content-between">
                                <div>Jr. software Engineer</div>
                                <div>13 Aug 2023 - Continuing</div>
                            </div>
                            <p style="font-weight: bold;">Codecloud Technology l Dhaka, Bangladesh</p>
                            
                            <ul>
                                <li>Collaborated with a team of developers to design, implement, and maintain
                                    software solutions for [Hr management system, Queue management system
                                    etc.].
                                    </li>
                                <li>Assisted in the optimization and improvement of existing software
                                    applications, contributing to enhanced performance and user experience.
                                </li>

                                <li>Actively participated in Agile/Scrum development processes, ensuring timely
                                    and efficient delivery of software solutions
                                </li>

                            </ul>

                        </div>

                        <div class="row mt-4">
                            <div class="col-7">
                                <h3 style="font-weight: bold; font-size: 250%">PERSONNEL PROJECT</h3>
                            </div>
                            <div class="col-5 mt-2">
                                <sub style="margin-top: -10px;"><hr class="solid"></sub>
                            </div>
                        </div>

                        <div class="row mt-4 p-3">
                            
                            <div>
                                <p style="font-weight: bold; margin-bottom: 0;">LMS based on OBE</p>
                                <p > <span>https://github.com/shanto2208/LMS_System.git</span></p>
                                <p > <span>Tools used:</span>  <span>Python, Django, HTML, CSS, JavaScript, Bootstrap, MySQL</span></p>
                            </div>

                            <div>
                                <p style="font-weight: bold; margin-bottom: 0;">Result Management System</p>
                                <p>https://github.com/shanto2208/result-management-system.git</p>
                                <p > <span>Tools used:</span>  <span>Tools Used: Php, HTML,CSS, MySQL</span></p>
                            </div>

                        <div class="row mt-4">
                            <div class="col-7">
                                <h3 style="font-weight: bold; font-size: 250%">PROJECT EXPERIENCE</h3>
                            </div>
                            <div class="col-5 mt-2">
                                <sub style="margin-top: -10px;"><hr class="solid"></sub>
                            </div>
                        </div>

                        <div class="row mt-4 ">
                            
                            <div>
                                <p style="font-weight: bold; margin-bottom: 0;">HRM( Human resource management )</p>
                                <p > <span>Tools used:</span>  <span>PHP, Laravel, Html, CSS, Js, jquery, MySQL</span></p>
                            </div>

                            <div>
                                <p style="font-weight: bold; margin-bottom: 0;">CRM(Customer Relationship Management)</p>
                                <p > <span>Tools used:</span>  <span>PHP, Laravel, Html, CSS, Js, jquery, MySQL</span></p>
                            </div>

                            <div>
                                <p style="font-weight: bold; margin-bottom: 0;">QMS ( Queue Management System )</p>
                                <p> <span>Tools used:</span>  <span>QMS ( Queue Management System )</span></p>
                            </div>
                            <div>
                                <p style="font-weight: bold; margin-bottom: 0;">Project Management System</p>
                                <p> <span>Tools used:</span>  <span>PHP, Laravel, Html, CSS, Js, jquery, MySQL</span></p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>                       
