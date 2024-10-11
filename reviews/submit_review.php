<?php
include('db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Asegúrate de que las variables estén definidas
    if (isset($_POST['reviewer_name']) && isset($_POST['rating']) && isset($_POST['review_text']) && isset($_POST['shop_id'])) {
        $name = $_POST['reviewer_name'];
        $rating = $_POST['rating'];
        $review = $_POST['review_text'];
        $shop_id = $_POST['shop_id'];

        try {
            $sql = "INSERT INTO reviews (name, rating, review, shop_id) VALUES (:name, :rating, :review, :shop_id)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':rating', $rating);
            $stmt->bindParam(':review', $review);
            $stmt->bindParam(':shop_id', $shop_id);
            $stmt->execute();

            // Redirigir a la página de reseñas con éxito
            header("Location: /ExploreLocal/reviews/shop-single-reviews.php?success=true&shop_id=" . $shop_id);
            exit;
        } catch (PDOException $e) {
            echo "Error al enviar la reseña: " . $e->getMessage();
        }
    }
}
?>
