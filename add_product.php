<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $unit = $_POST['unit'];
    $measurement = $_POST['measurement'];
    $category = $_POST['category'];

    // Map category to the correct table name
    $tables = [
        'base_oil' => 'base_oil',
        'chemical_solvent' => 'chemical_solvent',
        'diesel' => 'diesel',
        'diesel_oil' => 'diesel_oil',
        'gas_engine_oil' => 'gas_engine_oil',
        'light_diesel_oil' => 'light_diesel_oil',
        'turpentine_oil' => 'turpentine_oil'
    ];

    $table = $tables[$category] ?? 'base_oil'; // default to 'base_oil' if category is invalid

    $stmt = $pdo->prepare("INSERT INTO $table (name, image, description, unit, measurement) VALUES (:name, :image, :description, :unit, :measurement)");
    $stmt->execute([
        'name' => $name,
        'image' => $image,
        'description' => $description,
        'unit' => $unit,
        'measurement' => $measurement
    ]);

    echo 'Product added successfully!';
}
?>
