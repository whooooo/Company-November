<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
    <from action="" metod="post">
        <label for="fullname">Full Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="civilstate">Civil State</label>
        <select name="state" id="state">
            <option value="">--Select Civil State--</option>
        </select>
        <br>
        <label for="position">Position</label>
        <select name="position" id="position">
            <option value="">--Select Position--</option>
        </select>
        <br>
        <label for="employeestatus">Employee Status</label>
        <select name="status" id="status">
        <option value="">--Select Employee Status--</option>
        </select>
        <br>
        <label for="regularhoursrenderd">Regular Hours Renderd</label>
        <input type="text" name="regulartime" id="regulartime">
        <br>
        <label for="overtimehours">Over Time Hours</label>
        <input type="text" name="overtime" id="overtime">
        <br>
        <button type="submit" name="bn_submit">Submit</button>
    </form>
</body>
</html>