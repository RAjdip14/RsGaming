<?php
$hostname = $_SERVER['DOCUMENT_ROOT'];
$projectName = explode("/", $_SERVER['REQUEST_URI']);
include($hostname . "/" . $projectName[1] . '/database/connection.php');


// // print_r($_SESSION);
// if (!$_SESSION['isLogin']) {
//     header('location:../authenticate/login.php');
// }
$records = $db->query('SELECT * FROM `users`');

if (isset($_POST['selected_ids'])) {
    $deleteIds = $_POST['selected_ids'];
    foreach ($deleteIds as $id) {
        $deleteQuery = "DELETE FROM `users` WHERE id = $id ";
        $db->query($deleteQuery);
    }
    header('location:adminDashboard.php');
}

?>

<?php
if (isset($_GET['status'])) {
    echo "Deleted Successfully!";
}
?>

<h1>User List</h1>
<form method="post">
    <table border="1">
        <tr>
            <td>Select</td>
            <td>Name</td>
            <td>Email</td>
            <td>Contact</td>
            <td>Action</td>

        </tr>
        <?php
        while ($row = $records->fetch_object()) {
        ?>
            <tr>
                <td>
                    <input type="checkbox" name="selected_ids[]" value="<?php echo $row->id; ?>">
                </td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->contact; ?></td>

                <!-- <td><a href="show.php?id=<?php echo $row->id; ?>">Show</a></td> -->
                <td><a href="editUser.php?edit_id=<?php echo $row->id; ?>">Edit</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <input type="submit" value="DELETE ALL">
</form>