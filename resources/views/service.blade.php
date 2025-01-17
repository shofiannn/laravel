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
                    <a href="home" class="nav-link text-white fs-5">Home</a>
                </li>
                <li class="nav-item">
                    <a href="projects" class="nav-link text-white fs-5" >Projects</a>
                </li>
                <li class="nav-item">
                    <a href="service" class="nav-link text-white fs-5">Service</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    shofian
                  </button>
            </div>
        </div>

             <div class="col-md-10 text-dark d-flex overflow-auto" style="height:100vh;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 mt-3 ps-5">
                            <div class="card">
                                <div class="card-header"><h1>Service</h1></div>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Service Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            {{-- <th scope="row">1</th>
                                            <td>Service 1</td>
                                            <td>11/11/2011</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quo officiis deleniti dolor sit deserunt nihil vitae in. Quod delectus rem quasi ut neque explicabo commodi nobis, inventore amet! In!</td>
                                            <td>
                                                <button class="btn btn-sm btn-info mb-1" data-bs-toggle="modal"data-bs-target="#detailproject"><i class="bi bi-info-circle"></i></button>
                                                <a href="" class="btn btn-sm btn-success mb-1"><i class="bi bi-pencil-square"></i></a>
                                                <a href="" class="btn btn-sm btn-danger mb-1"><i class="bi bi-trash3"></i></a>
                                            </td> --}}
                                          </tr>
                                          <tr>
                                            {{-- <th scope="row">2</th>
                                            <td>Service 2</td>
                                            <td>22/02/2022</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat a aliquam labore accusamus! Natus assumenda dicta quia iure sequi, quos maiores. Nesciunt quae alias id molestiae beatae odio reprehenderit voluptatum?</td>
                                            <td>
                                                <button class="btn btn-sm btn-info mb-1" data-bs-toggle="modal"data-bs-target="#detailproject"><i class="bi bi-info-circle"></i></button>
                                                <a href="" class="btn btn-sm btn-success mb-1"><i class="bi bi-pencil-square"></i></a>
                                                <a href="" class="btn btn-sm btn-danger mb-1"><i class="bi bi-trash3"></i></a>
                                            </td> --}}
                                          </tr>
                                          <tr>
                                            {{-- <th scope="row">3</th>
                                            <td>Service 3</td>
                                            <td>22/02/2022</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat a aliquam labore accusamus! Natus assumenda dicta quia iure sequi, quos maiores. Nesciunt quae alias id molestiae beatae odio reprehenderit voluptatum?</td>
                                            <td>
                                                <button class="btn btn-sm btn-info mb-1" data-bs-toggle="modal"data-bs-target="#detailproject"><i class="bi bi-info-circle"></i></button>
                                                <a href="" class="btn btn-sm btn-success mb-1"><i class="bi bi-pencil-square"></i></a>
                                                <a href="" class="btn btn-sm btn-danger mb-1"><i class="bi bi-trash3"></i></a>
                                            </td> --}}
                                          </tr>
                                        </tbody>
                                      </table>
                                      <div class="modal fade" id="detailproject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              ...
                                            </div>                                    
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                          <div class="mt-3 ps-5 me-4">
                            <div class="card">
                                <div class="card-header">
                                    <h1 class="fw-bold text-center pb-3">
                                    Add Service
                                  </h1>
                                </div>
                                <div class="card-body">
                                    <form class="">
                                        <label class="form-label" for="">Service Name</label>
                                        <input type="text" class="form-control" required>
                                        <label for="" class="form-label">Category</label>
                                        <select name="" id="" class="form-control" required>
                                            {{-- <option value="">Service 1</option>
                                            <option value="">Service 2</option>
                                            <option value="">Service 3</option> --}}
                                        </select>
                                        <label class="form-label" for="">Date</label>
                                        <input type="date" class="form-control" required>
                                        <label for="" class="form-label">Add File</label>
                                        <input class="form-control" type="file" required>
                                        <label class="form-label" for="">Description</label>
                                        <textarea class="form-control"></textarea>
                                        <button type="submit" class="btn btn-primary text-white mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
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