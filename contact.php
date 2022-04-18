<?php 
require_once('contactFunctionDb.php');
session_start();
if(empty($_SESSION["name"])) {
        header('location:login.php');
}

$contact = new contact();
$contact->SetId($_SESSION['id']);
$res=$contact->Select();

if (isset($_POST['save'])) {
    $contact->SetName($_POST['name']);
    $contact->SetPhone($_POST['phone']);
    $contact->SetEmail($_POST['email']);
    $contact->SetAddress($_POST['address']);
    $contact->SetId($_SESSION['id']);
  
    if($contact->Add()) {
        header("Location:contact.php");
    }
}
?>
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
            <a class="navbar-brand" href="contact.php">Contact List</a>
            <div class="d-flex justify-content-center align-item-center">
                <a class="nav-link active text-muted hov" href="profil.php"><?= $_SESSION['name']?></a>
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
                    <a class="text-decoration-none" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Contact</a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Course Form</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="px-4 py-3" id="form">
                                <h4 id="addcontact">Add Contact:</h4>
                                    <form class="row g-3 needs-validation text-muted" method="POST" novalidate>
                                    <div class="col-md-6">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="small-size form-control" name="name" id="name" placeholder="Enter name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone</label>
                                            <input type="text" class="small-size form-control" name="phone" id="phone" placeholder="Enter phone">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="small-size form-control" name="email" id="email" placeholder="Enter email" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="small-size form-control" name="address" id="address" placeholder="Enter address" required>
                                        </div>
                                        <div class="col-12 mt-3 modal-footer text-center">
                                            <button class="btn btn-primary" name="save" type="submit">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <h4>Contacts List:</h4>
                    <div class="py-4">
                        <div class=" px-3">
                            <?php if (!empty($res)) { foreach($res as $rows) {?>
                            <hr class="my-0">
                            <div class="row my-3">
                                <p class="col-sm-2 mb-0 p-1"><?= $rows['name']; ?></p>
                                <p class="col-sm-3 mb-0 p-1"><?= $rows['email']; ?></p>
                                <p class="col-sm-2 mb-0 p-1"><?= $rows['phone']; ?></p>
                                <p class="col-sm-3 mb-0 p-1"><?= $rows['address']; ?></p>
                                <p class="col-sm-1 mb-0 p-1"><a class="text-decoration-none" href="delete.php?id=<?= $rows['id_contact']?>&req=update" type="button">edit</a></p>
                                <p class="col-sm-1 mb-0 p-1"><a class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModaldelete" type="button">delete</a></p>
                                <div class="modal fade" id="exampleModaldelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="exampleModalLabel">DELETE CONTACT ALERT</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="px-4 py-3">
                                                Do you really want to delete this contact? <br>
                                            </div>
                                            <div class="px-4 py-3">
                                                <a class="text-decoration-none text-info" href="action.php?delete=<?= $rows['id_contact']?>&req=delete">Yes, Delete this contact please<img class="px-2" src="icon/can.svg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} else {echo "<div><p>No Contacts.</p></div>";}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>