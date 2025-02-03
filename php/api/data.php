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

    // Получаем параметр категории из запроса
    $category = $_GET['category'] ?? null;

    // Базовый SQL-запрос
    $sql = "SELECT * FROM products";

    // Добавляем фильтрацию по категории, если указана
    if ($category) {
        $sql .= " WHERE category = :category";
    }

    $stmt = $pdo->prepare($sql);

    // Привязываем параметр категории
    if ($category) {
        $stmt->bindParam(':category', $category);
    }

    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Возвращаем данные в формате JSON
    echo json_encode($products);
} catch (PDOException $e) {
    // Возвращаем ошибку 500 и сообщение об ошибке
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()]);
}
