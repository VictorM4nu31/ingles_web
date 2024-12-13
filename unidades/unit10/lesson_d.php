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
    <title>Unit 10 - Lesson D</title>
    <style>
        :root {
            --fondo: #333333;
            --fondo-formulario: hsl(0, 1.30%, 85.30%);
            --color-texto: #333333;
            --color-boton: #32cd32;
            --color-boton-hover: #28a745;
            --color-titulo: rgb(68, 165, 112);
        }

        body {
            background-color: var(--fondo);
            font-family: Arial, sans-serif;
            color: var(--color-texto);
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: var(--color-titulo);
            font-size: 2.5rem;
            text-align: center;
        }

        
        .test {
            color:rgb(15, 71, 28);
        }

        form {
            background-color: var(--fondo-formulario);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        p {
            font-size: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        ul {
            list-style-type: none; /* Elimina los puntos */
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        button[type="submit"] {
            background-color: var(--color-boton);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: var(--color-boton-hover);
        }

        section img {
            display: block;
            margin: 0 auto;
            width: 100%;
            max-width: 300px; /* Ajusta el tamaño máximo */
            height: 200px; /* Ajusta la altura fija */
            object-fit: cover; /* Asegura proporciones */
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        section p, section h2 {
            color: white;
            text-align: center;
        }

        section {
            text-align: center;
            margin-bottom: 20px;
        }

        .special-section {
        margin: 20px;
        }

        .special-section .content-box {
            background-color: #a8d5a5; /* Verde claro */
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .special-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .special-section .content-box {
            flex: 1 1 calc(50% - 20px); /* Dos columnas con espacio */
        }

        /* Para pantallas más pequeñas */
        @media (max-width: 768px) {
            .special-section .content-box {
                flex: 1 1 100%; /* Una columna */
            }
        }
    </style>
</head>
<body>
    <div>
        <h1>Unit 10: A Walk Across Japan</h1>

        <section class="special-section">
            <h2>Reading: "A Walk Across Japan"</h2>
            <p>"A Walk Across Japan" is a captivating work of travel literature...</p>
            <div class="content-box">
                <h3>Key Elements of Travel Narrative:</h3>
                <ul>
                    <li><strong>Geographical Challenge:</strong> The sheer scale of walking...</li>
                    <li><strong>Cultural Immersion:</strong> The narrative delves into...</li>
                    <li><strong>Personal Transformation:</strong> As the protagonist...</li>
                    <li><strong>Narrative Style:</strong> The story is often told...</li>
                </ul>
            </div>
            <div class="content-box">
                <h3>Fascinating Facts:</h3>
                <ul>
                    <li>Approximately 73% of Japan is mountainous...</li>
                    <li>Experienced hikers typically cover 3-4 miles...</li>
                    <li>Most traverses of Japan span around...</li>
                    <li>In Japanese tradition, long-distance walking...</li>
                </ul>
            </div>
        </section>

        <section class="special-section">
            <h2>Writing: "An Accomplishment"</h2>
            <p>Crafting a narrative about a personal accomplishment requires...</p>
            <div class="content-box">
                <h3>Grammatical Composition:</h3>
                <ul>
                    <li><strong>Predominance of Past Tense:</strong> The core of the narrative...</li>
                    <li><strong>Utilization of Present Perfect:</strong> This tense can be...</li>
                    <li><strong>Reflective Language:</strong> The inclusion of analytical...</li>
                    <li><strong>Narrative Structure:</strong> Effective accomplishment...</li>
                </ul>
            </div>
            <div class="content-box">
                <h3>Engaging Grammatical Techniques:</h3>
                <ul>
                    <li>Complex Sentences</li>
                    <li>Diverse Verb Tenses</li>
                    <li>Descriptive Adjectives</li>
                    <li>Reflective Phrases</li>
                </ul>
            </div>
        </section>


        <form action="" method="post">
            <section>
                <h2 class="test">Test Questions</h2>

                <?php 
                $questions = [
                    "The primary motivation for walking across Japan in this narrative would likely be:" => [
                        "a" => "Sightseeing and tourism",
                        "b" => "Personal challenge and cultural immersion",
                        "c" => "Athletic training and endurance",
                        "d" => "Academic research"
                    ],
                    "The most challenging terrain the traveler would encounter during the journey would be:" => [
                        "a" => "Urbanized areas with complex infrastructure",
                        "b" => "Coastal regions with flat, monotonous landscapes",
                        "c" => "Mountainous regions with steep slopes and elevations",
                        "d" => "Arid, desert-like environments"
                    ],
                    "The traveler's preparation for such a journey would most probably include:" => [
                        "a" => "Acquiring expensive photography equipment",
                        "b" => "Learning basic Japanese language skills",
                        "c" => "Collecting souvenir t-shirts and memorabilia",
                        "d" => "Researching local cuisine and restaurant options"
                    ],
                    "The cultural encounters during the walk would likely involve:" => [
                        "a" => "Avoiding interaction with local residents",
                        "b" => "Engaging in only superficial conversations",
                        "c" => "Immersive cultural exchange and deep relationships",
                        "d" => "Taking photographs without any meaningful engagement"
                    ],
                    "The psychological impact of the journey on the traveler would most likely result in:" => [
                        "a" => "Complete physical exhaustion and regret",
                        "b" => "Profound personal transformation and self-discovery",
                        "c" => "Minimal emotional or personal change",
                        "d" => "Primarily a sense of physical accomplishment"
                    ],
                    "When describing an accomplishment, the most appropriate tense is:" => [
                        "a" => "Future Continuous",
                        "b" => "Present Perfect",
                        "c" => "Past Simple",
                        "d" => "Future Perfect"
                    ],
                    "A strong accomplishment narrative typically emphasizes:" => [
                        "a" => "Solely successful outcomes",
                        "b" => "The personal growth journey",
                        "c" => "Primarily financial rewards",
                        "d" => "External recognition and validation"
                    ],
                    "Effective reflective language in the narrative includes:" => [
                        "a" => "Detached, impersonal descriptions",
                        "b" => "Emotionally charged outbursts",
                        "c" => "Analytical, introspective phrases",
                        "d" => "Minimal personal commentary"
                    ],
                    "The structural progression of an accomplishment narrative often follows:" => [
                        "a" => "A random sequence of unconnected events",
                        "b" => "A chronological challenge-solution-reflection pattern",
                        "c" => "A straightforward listing of achievements",
                        "d" => "A primary focus on negative experiences"
                    ],
                    "Key grammatical elements in accomplishment writing include:" => [
                        "a" => "Avoiding the use of personal pronouns",
                        "b" => "Incorporating complex verb tenses",
                        "c" => "Minimizing descriptive language",
                        "d" => "Emphasizing external validation"
                    ]
                ];

                $correct_answers = [
                    "The primary motivation for walking across Japan in this narrative would likely be:" => "b",
                    "The most challenging terrain the traveler would encounter during the journey would be:" => "c",
                    "The traveler's preparation for such a journey would most probably include:" => "b",
                    "The cultural encounters during the walk would likely involve:" => "c",
                    "The psychological impact of the journey on the traveler would most likely result in:" => "b",
                    "When describing an accomplishment, the most appropriate tense is:" => "c",
                    "A strong accomplishment narrative typically emphasizes:" => "b",
                    "Effective reflective language in the narrative includes:" => "c",
                    "The structural progression of an accomplishment narrative often follows:" => "b",
                    "Key grammatical elements in accomplishment writing include:" => "b"
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

<!--Inicio -->
<?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $answers = $_POST['answers'] ?? [];
            $score = 0;
            $total = count($correct_answers);
            $message = "this is the message";
        ?>

            <section>
                <h2 style="color: #00ff00; text-align: center;"> Results</h2>
            </section>

            <ul style="background-color: #333333; padding: 20px; border-radius: 8px; list-style: none;">
                <?php
                foreach ($correct_answers as $question => $correct) {
                    $user_answer = $answers[$question] ?? 'No answer';
                    $is_correct = $user_answer === $correct;
                    if ($is_correct) {
                        $score++;
                    }

                ?>
                    <li style="margin-bottom: 20px; border-bottom: 1px solid #555; padding-bottom: 10px;">
                        <strong style="color: #ffffff; font-size: 18px;"><?php echo $question; ?></strong>
                        <br>
                        <span style="color: #cccccc;">Your answer: <strong style="color: <?php echo $is_correct ? '#00ff00' : '#ff0000'; ?>;">
                                <?php echo $questions[$question][$user_answer] ?? "No answer selected"; ?>
                            </strong></span>
                        <br>
                        <span style="color: #cccccc;">Correct answer: <strong style="color: #00ff00;">
                                <?php echo $questions[$question][$correct]; ?>
                            </strong></span>
                        <br>
                        <span style="color: #cccccc;">Result: <strong style="color: <?php echo $is_correct ? '#00ff00' : '#ff0000'; ?>;">
                                <?php echo $is_correct ? "Correct" : "Incorrect"; ?>
                            </strong></span>

                    </li>
                <?php
                }
                ?>
            </ul>
            <h2 style="color: #00ff00; text-align: center; margin-top: 20px;">
                Your score: <?php echo $score; ?> out of <?php echo $total; ?>
            </h2>
        <?php
        }
        ?>

        <!--final -->
    </div>
</body>
</html>