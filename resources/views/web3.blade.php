<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="row g-0" style="background-color: #2e3233;">
        <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white" style=" height: 100vh; background-color: #221f1f;">
            <a class="d-flex text-align-center text-white text-decoration-none" href="#" style="font-size: x-large;"><span class="fw-bold fs-3">BelajarBS</span></a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto" st>
                <li class="nav-item">
                    <a href="home.html" class="nav-link text-white fs-5">Home</a>
                </li>
                <li class="nav-item">
                    <a href="projects.html" class="nav-link text-white fs-5" >Projects</a>
                </li>
                <li class="nav-item">
                    <a href="service.html" class="nav-link text-white fs-5">Service</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    shofian
                  </button>
            </div>
        </div>
        
        <div class="col-md-10 text-dark d-flex overflow-auto" style="height: 100vh;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11 mt-3 ps-5">
                        <div class="card">
                            <div class="card-header"><h1>Projects</h1></div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Project</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Web Design</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td>
                                                <a href="projects.html" class="btn btn-sm btn-info mb-1 bi bi-info-circle"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Database</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td>
                                                <a href="projects.html" class="btn btn-sm btn-info mb-1 bi bi-info-circle"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>UI / UX</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td>
                                                <a href="projects.html" class="btn btn-sm btn-info mb-1 bi bi-info-circle"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-11 mt-5 ps-5">
                            <div class="card">
                                <div class="card-header">
                                    <h1>Service Review</h1>
                                </div>
                                <div class="card-body" style="background-color: rgb(160, 160, 160);">
                                    <div class="row">
                                        <div class="col-md-4">
                                          <div class="card">
                                            <div class="card-body">
                                              <h5 class="card-title">Service 1</h5>
                                              <p >Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                              <a href="service.html" class="btn btn-primary">See Details</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card">
                                            <div class="card-body">
                                              <h5 class="card-title">Service 2</h5>
                                              <p >Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                              <a href="service.html" class="btn btn-primary">See Details</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-md-4">
                                          <div class="card">
                                            <div class="card-body">
                                              <h5 class="card-title">Service 3</h5>
                                              <p >Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                              <a href="service.html" class="btn btn-primary">See Details</a>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>