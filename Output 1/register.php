<?php
$message = "";
$record = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $age = trim($_POST["age"] ?? "");
    $gender = $_POST["gender"] ?? "";
    $email = trim($_POST["email"] ?? "");
    $address = trim($_POST["address"] ?? "");
    $phone = trim($_POST["phone"] ?? "");

    if (
        empty($name) ||
        empty($age) ||
        empty($gender) ||
        empty($email) ||
        empty($address) ||
        empty($phone)
    ) {
        $message = "<div class='alert alert-danger'>
                        Please complete all required fields.
                    </div>";
    } elseif (!is_numeric($age) || $age < 1 || $age > 120) {
        $message = "<div class='alert alert-danger'>
                        Please enter a valid age.
                    </div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "<div class='alert alert-danger'>
                        Please enter a valid email address.
                    </div>";
    } else {

        $record = [
            "name" => $name,
            "age" => $age,
            "gender" => $gender,
            "email" => $email,
            "address" => $address,
            "phone" => $phone
        ];

        $message = "<div class='alert alert-success'>
                        Registration completed successfully!
                    </div>";
    }
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card shadow border-0">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Student Registration</h4>
                </div>

                <div class="card-body p-4">

                    <?= $message ?>

                    <form method="POST">

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    value="<?= htmlspecialchars($_POST['name'] ?? '') ?>"
                                    placeholder="Enter your full name"
                                    required
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Age</label>
                                <input
                                    type="number"
                                    name="age"
                                    class="form-control"
                                    value="<?= htmlspecialchars($_POST['age'] ?? '') ?>"
                                    min="1"
                                    max="120"
                                    placeholder="Enter age"
                                    required
                                >
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Gender</label>
                                <select name="gender" class="form-select" required>
                                    <option value="">Choose Gender</option>
                                    <option value="Male"
                                        <?= (($_POST['gender'] ?? '') == 'Male') ? 'selected' : '' ?>>
                                        Male
                                    </option>
                                    <option value="Female"
                                        <?= (($_POST['gender'] ?? '') == 'Female') ? 'selected' : '' ?>>
                                        Female
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address</label>
                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                                    placeholder="example@email.com"
                                    required
                                >
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label">Complete Address</label>
                                <textarea
                                    name="address"
                                    class="form-control"
                                    rows="3"
                                    placeholder="Enter your address"
                                    required
                                ><?= htmlspecialchars($_POST['address'] ?? '') ?></textarea>
                            </div>

                            <div class="col-12 mb-4">
                                <label class="form-label">Contact Number</label>
                                <input
                                    type="tel"
                                    name="phone"
                                    class="form-control"
                                    value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>"
                                    placeholder="09XXXXXXXXX"
                                    required
                                >
                            </div>

                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Register Student
                            </button>
                        </div>

                    </form>

                </div>
            </div>

            <?php if (!empty($record)): ?>

                <div class="card shadow border-0 mt-4">

                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Registration Information</h5>
                    </div>

                    <div class="card-body">

                        <table class="table table-bordered mb-0">

                            <tr>
                                <th width="35%">Full Name</th>
                                <td><?= htmlspecialchars($record["name"]) ?></td>
                            </tr>

                            <tr>
                                <th>Age</th>
                                <td><?= htmlspecialchars($record["age"]) ?></td>
                            </tr>

                            <tr>
                                <th>Gender</th>
                                <td><?= htmlspecialchars($record["gender"]) ?></td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td><?= htmlspecialchars($record["email"]) ?></td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td><?= htmlspecialchars($record["address"]) ?></td>
                            </tr>

                            <tr>
                                <th>Contact Number</th>
                                <td><?= htmlspecialchars($record["phone"]) ?></td>
                            </tr>

                        </table>

                    </div>
                </div>

            <?php endif; ?>

        </div>
    </div>
</div>
