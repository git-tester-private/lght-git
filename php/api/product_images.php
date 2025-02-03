<?php
header('Access-Control-Allow-Origin: *'); // Разрешаем запросы с любого домена
header('Access-Control-Allow-Methods: GET, POST, OPTIONS'); // Разрешаем методы
header('Access-Control-Allow-Headers: Content-Type, Authorization'); // Разрешаем заголовки
header('Content-Type: application/json'); // Указываем, что возвращаем JSON
header("Access-Control-Allow-Origin: http://localhost:5173");


$host = 'mysql_container'; // Хост базы данных
$port = 3307;              // Порт базы данных
$dbname = 'lamp_store';        // Имя базы данных
$user = 'root';            // Имя пользователя
$password = 'root';        // Пароль

try {
    // Подключение к базе данных
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $product_id = $_GET['product_id'] ?? null;


    $stmt = $pdo->prepare("select image_url from product_images where product_id = :product_id");
    $stmt->bindParam(':product_id', var: $product_id, type: PDO::PARAM_INT);
    $stmt->execute();
    $images = $stmt->fetchAll(PDO::FETCH_COLUMN);
    echo json_encode($images);

} catch (PDOException $e) {
    // Возвращаем ошибку 500 и сообщение об ошибке
    http_response_code(response_code: 500);
    echo json_encode(value: ["error" => $e->getMessage()]);
}
