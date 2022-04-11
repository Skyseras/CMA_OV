<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Contact Management App</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Contact List</a>
            <div class="d-flex justify-content-center align-item-center">
                <a class="nav-link active text-muted hov" href="profil.php">Yasser</a>
                <a class="nav-link active text-muted hov" href="contact.php">Contacts</a>
                <a class="nav-link active text-muted hov" href="login.php">Logout</a>
            </div>
        </div>
    </nav>
    <main>
        <div class="d-flex justify-content-center align-items-center">
            <div class="bg-light p-5 m-5 w-100">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contacts</h2>
                    <a class="text-decoration-none" onclick="scrollto()">Add New Contact</a>
                </div>
                <div>
                    <h4>Contacts List:</h4>
                    <div>
                        <p>No Contacts.</p>
                    </div>
                    <div class="py-4">
                        <div class=" px-3">
                            <hr class="my-0">
                            <div class="row my-3">
                                <p class="col-sm-2 mb-0 p-1">Yasser</p>
                                <p class="col-sm-3 mb-0 p-1">Yasser@gmail.com</p>
                                <p class="col-sm-2 mb-0 p-1">+212 651 515 151</p>
                                <p class="col-sm-3 mb-0 p-1">Address youssoufia rue 31 N° 34</p>
                                <p class="col-sm-1 mb-0 p-1">edit</p>
                                <p class="col-sm-1 mb-0 p-1">delete</p>
                            </div>
                            <hr class="my-0">
                            <div class="row my-3">
                                <p class="col-sm-2 mb-0 p-1">Yasser</p>
                                <p class="col-sm-3 mb-0 p-1">Yasser@gmail.com</p>
                                <p class="col-sm-2 mb-0 p-1">+212 651 515 151</p>
                                <p class="col-sm-3 mb-0 p-1">Address youssoufia rue 31 N° 34</p>
                                <p class="col-sm-1 mb-0 p-1">edit</p>
                                <p class="col-sm-1 mb-0 p-1">delete</p>
                            </div>
                            <hr class="my-0">
                            <div class="row my-3">
                                <p class="col-sm-2 mb-0 p-1">Yasser</p>
                                <p class="col-sm-3 mb-0 p-1">Yasser@gmail.com</p>
                                <p class="col-sm-2 mb-0 p-1">+212 651 515 151</p>
                                <p class="col-sm-3 mb-0 p-1">Address youssoufia rue 31 N° 34</p>
                                <p class="col-sm-1 mb-0 p-1">edit</p>
                                <p class="col-sm-1 mb-0 p-1">delete</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div>
                    <h4 id="addcontact">Add Contact:</h4>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Name</label>
                            <input type="text" class="small-size form-control" id="validationCustom01" placeholder="Enter name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Phone</label>
                            <input type="number" class="small-size form-control" id="validationCustom02" placeholder="Enter phone" required>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom03" class="form-label">Email</label>
                            <input type="email" class="small-size form-control" id="validationCustom03" placeholder="Enter email" required>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom04" class="form-label">Address</label>
                            <input type="text" class="small-size form-control" id="validationCustom04" placeholder="Enter address" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>