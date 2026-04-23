<?php
class Product {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        return $this->pdo->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $sql = "INSERT INTO products(name, price, category, image, description)
                VALUES(?,?,?,?,?)";
        return $this->pdo->prepare($sql)->execute([
            $data['name'],
            $data['price'],
            $data['category'],
            $data['image'],
            $data['description']
        ]);
    }

    public function update($id, $data) {
        $sql = "UPDATE products SET name=?, price=?, category=?, image=?, description=? WHERE id=?";
        return $this->pdo->prepare($sql)->execute([
            $data['name'],
            $data['price'],
            $data['category'],
            $data['image'],
            $data['description'],
            $id
        ]);
    }

    public function delete($id) {
        return $this->pdo->prepare("DELETE FROM products WHERE id=?")->execute([$id]);
    }
}
?>