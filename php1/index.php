<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Output 1</title>
    <style>
        body {
            font-family: "Arial";
        }
    </style>
</head>
<body>
    <h1>PHP Output No. 1</h1>
    
    <fieldset>
        <legend>This form uses POST request</legend>
        <form action="redirect.php" method="POST">
        <table>
            <tr>
                <td>Age</td>
                <td>
                    <input type="number" name="age" placeholder="Enter Age" required />
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="text" name="gender" placeholder="Enter your Gender" required />
                </td>
            </tr>
            
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" name="email" placeholder="Enter your Email" required />
                </td>

                <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="Address" placeholder="Enter your Address" required />
                </td>

                <tr>
                <td>Contact Number</td>
                <td>
                    <input type="number" name="Contact Number" placeholder="Enter your Contact Number" required />
                </td>
                </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit Data">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </fieldset>
</body>
</html>