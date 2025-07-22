<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Registration VMS</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            border: 2px solid #007bff; /* Blue border around the form */
            border-radius: 8px; /* Rounded corners */
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
            background-color: #f9f9f9; /* Light background for the form */
        }
        .form-container h2 {
            color: #007bff; /* Matching header color with border */
            text-align: center;
            margin-bottom: 30px;
        }
        .form-row {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h2>Membership Information Form</h2>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dateOfBirth">Date of Birth</label>
                        <input type="date" class="form-control" id="dateOfBirth">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="secondaryPhone">Secondary Phone</label>
                        <input type="tel" class="form-control" id="secondaryPhone" placeholder="Secondary Phone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Joiningdate">Joining Date</label>
                        <input type="date" class="form-control" id="joiningdate">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="MembershipNumber">Membership Number</label>
                        <input type="text" class="form-control" id="registrationNumber" placeholder="Membership Number">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="region">Region</label>
                        <input type="text" class="form-control" id="region" placeholder="Region">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="county">County</label>
                        <input type="text" class="form-control" id="county" placeholder="County">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="corp">Corp</label>
                        <input type="text" class="form-control" id="city" placeholder="corp">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="institution">Institution</label>
                        <input type="text" class="form-control" id="institution" placeholder="Institution">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>