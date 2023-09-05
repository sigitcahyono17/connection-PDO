<?php
require_once "../../connection.php";

$connect = $mysql->getConnection();

$id = $_GET['id'];
$query = $connect->prepare("select * from  movies where id = ?");
$query->execute([$id]);
$movie = $query->fetch();

if (isset($_POST['title']) && isset($_POST['synopsis'])) {
    $updateQuery = "update movies set title = ?, synopsis = ? where id = ?";
    $payload = [$_POST['title'], $_POST['synopsis'], $id];
    $prepareQuery = $connect->prepare($updateQuery);
    $update = $prepareQuery->execute($payload);  
    
    header('Location: index.php');
}
?>

<section>
    <div class="form-movie">
        <form action="" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="<?= $movie['title'] ?>">
            </div>
            <div class="form-group">
                <label for="title">Synopsis</label>
                <textarea name="synopsis"><?= $movie['synopsis'] ?></textarea>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </div>
</section>