<?php
session_start();
if (!empty($_SESSION['test_completed'])) {
    session_unset();
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit 11 - Lesson D</title>
</head>
<body>
    <div>
        <h1>Unit 11: A Guide to Breaking into the Music Business</h1>

        <section>
            <h2>Qualities for Success</h2>
            <p>Breaking into the music business is a dream for many aspiring artists. However, it requires talent, hard work, and knowledge of the industry. To succeed, artists must create unique music that stands out in a competitive market. Networking is crucial—building relationships with producers, managers, and other musicians can open doors to new opportunities. Social media has become a vital tool for self-promotion, allowing artists to reach audiences worldwide. Additionally, understanding contracts and the legal aspects of the industry is essential to avoid exploitation. Finally, persistence is key; rejection is common, but those who keep improving and trying often find success.</p>
            <img src="path/to/image.jpg" alt="Qualities for Success Example">
        </section>

        <section>
            <h2>Writing: A Music Review</h2>
            <p>Writing a music review involves analyzing and expressing your opinion about a song, album, or performance. To write a compelling review, start by describing the music’s genre, style, and key elements such as rhythm, melody, and lyrics. Mention any standout features, like a powerful vocal performance or an impressive instrumental solo. Be specific and provide examples to support your opinions. It’s also important to consider the context—who is the artist, and what is their background? Finally, offer a balanced critique by discussing both strengths and weaknesses. A good review helps readers understand the music and decide if it’s worth listening to.</p>
            <img src="path/to/image.jpg" alt="Music Review Example">
        </section>

        <form action="" method="post">
            <section>
                <h2>Test Questions</h2>

                <?php 
                $questions = [
                    // A Guide to Breaking into the Music Business
                    "What is the first step to breaking into the music business?" => [
                        "a" => "Networking with producers",
                        "b" => "Creating unique music",
                        "c" => "Signing a contract",
                        "d" => "Promoting on social media"
                    ],
                    "Why is networking important for aspiring musicians?" => [
                        "a" => "It helps build relationships that open opportunities",
                        "b" => "It guarantees a recording contract",
                        "c" => "It makes self-promotion unnecessary",
                        "d" => "It replaces talent as the main requirement"
                    ],
                    "How can social media help new artists?" => [
                        "a" => "By guaranteeing a record deal",
                        "b" => "By allowing them to reach a global audience",
                        "c" => "By avoiding rejection",
                        "d" => "By teaching them about contracts"
                    ],
                    "Why is it important to understand contracts in the music business?" => [
                        "a" => "To avoid legal issues and exploitation",
                        "b" => "To guarantee immediate success",
                        "c" => "To network with other musicians",
                        "d" => "To learn how to produce music"
                    ],
                    "What is a key quality for succeeding in the music industry?" => [
                        "a" => "Talent only",
                        "b" => "A good lawyer",
                        "c" => "Persistence",
                        "d" => "Access to a large studio"
                    ],

                    // Writing: A Music Review
                    "What should a music review start with?" => [
                        "a" => "A critique of the artist",
                        "b" => "A description of the music’s genre and style",
                        "c" => "A list of the artist’s albums",
                        "d" => "A summary of the lyrics"
                    ],
                    "What makes a music review more specific and compelling?" => [
                        "a" => "Including examples to support opinions",
                        "b" => "Avoiding critiques of the music",
                        "c" => "Writing as briefly as possible",
                        "d" => "Only discussing weaknesses"
                    ],
                    "Why is it important to consider the artist’s background in a review?" => [
                        "a" => "To criticize their past work",
                        "b" => "To understand the context of their music",
                        "c" => "To avoid discussing their music",
                        "d" => "To focus on their weaknesses"
                    ],
                    "What is the purpose of a balanced critique in a review?" => [
                        "a" => "To focus only on weaknesses",
                        "b" => "To praise the artist completely",
                        "c" => "To discuss both strengths and weaknesses",
                        "d" => "To decide if the artist should stop making music"
                    ],
                    "What is the main goal of a music review?" => [
                        "a" => "To discourage people from listening to certain music",
                        "b" => "To promote only popular artists",
                        "c" => "To help readers decide if the music is worth listening to",
                        "d" => "To analyze the artist’s personal life"
                    ]
                ];

                $correct_answers = [
                    "What is the first step to breaking into the music business?" => "b",
                    "Why is networking important for aspiring musicians?" => "a",
                    "How can social media help new artists?" => "b",
                    "Why is it important to understand contracts in the music business?" => "a",
                    "What is a key quality for succeeding in the music industry?" => "c",
                    "What should a music review start with?" => "b",
                    "What makes a music review more specific and compelling?" => "a",
                    "Why is it important to consider the artist’s background in a review?" => "b",
                    "What is the purpose of a balanced critique in a review?" => "c",
                    "What is the main goal of a music review?" => "c"
                ];

                foreach ($questions as $question => $options): ?>
                    <div>
                        <h3><?php echo $question; ?></h3>
                        <ul>
                            <?php foreach ($options as $key => $option): ?>
                                <li>
                                    <label>
                                        <input type="radio" name="answers[<?php echo $question; ?>]" value="<?php echo $key; ?>">
                                        <?php echo $option; ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>

                <button type="submit">Submit Test</button>
            </section>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $answers = $_POST['answers'] ?? [];
            $score = 0;
            $total = count($correct_answers);

            echo "<section><h2>Results</h2><ul>";
            foreach ($correct_answers as $question => $correct) {
                $user_answer = $answers[$question] ?? 'No answer';
                $is_correct = $user_answer === $correct;
                if ($is_correct) {
                    $score++;
                }
                echo "<li><strong>Question:</strong> $question";
                echo "<br><strong>Your answer:</strong> " . ($questions[$question][$user_answer] ?? 'No answer selected');
                echo "<br><strong>Correct answer:</strong> " . $questions[$question][$correct];
                echo "<br><strong>Result:</strong> " . ($is_correct ? 'Correct' : 'Incorrect') . "</li><br>";
            }
            echo "</ul><p>Your score: $score out of $total</p></section>";
        }
        ?>
    </div>
</body>
</html>