<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Recommend Books</h1>
    
    <?php 
        $books = [
            "Do Androids Dream of Electric Sheep",
            "The Langolier",
            "Hail Mary"
        ];

        $booksAgain = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'https://example.com'
            ],
            [
                'name' => 'Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'https://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'https://example.com'
            ]
        ];

        function filterByAuthor($booksAgain, $author) {
            $filteredBooks = [];

            foreach ($booksAgain as $bookAgain) {
                if ($bookAgain['author'] === $author) {
                    $filteredBooks[] = $bookAgain;
                }
            }

            return $filteredBooks;
        }
    ?>

    <ul>
        <?php 
            foreach ($books as $book) {
                echo "<li>$book</li>";
            }
        ?>

        <?php 
            foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach ?>
    </ul>

    <p>
        <?= $books[2] ?>
    </p>

    <ul>
        <?php foreach ($booksAgain as $bookAgain) : ?>
            <?php if ($bookAgain['author'] === 'Andy Weir') : ?>
            <li>
                <a href="<?= $bookAgain['purchaseUrl'] ?>">
                    <?= $bookAgain['name'] ?> (<?= $bookAgain['releaseYear'] ?>)
                </a>
                <p><?= $bookAgain['author'] ?></p>
            </li>
            <?php endif; ?>
        <?php endforeach ?>
    </ul>

    <ul>
        <?php foreach (filterByAuthor($booksAgain, 'Andy Weir') as $bookAgain) : ?>
            <li>
                <a href="<?= $bookAgain['purchaseUrl'] ?>">
                    <?= $bookAgain['name'] ?> (<?= $bookAgain['releaseYear'] ?>)
                </a>
                <p><?= $bookAgain['author'] ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>