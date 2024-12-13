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
</head>
<body>
    <div>
        <h1>Unit 10: A Walk Across Japan</h1>

        <section>
            <h2>Reading: "A Walk Across Japan"</h2>
            <p>"A Walk Across Japan" is a captivating work of travel literature that chronicles an individual's physical and personal journey across the diverse landscapes of Japan. This genre blends geographical exploration with profound self-discovery, offering readers a window into the transformative power of immersive cultural experiences.</p>
            <h3>Key Elements of Travel Narrative:</h3>
            <ul>
                <li><strong>Geographical Challenge:</strong> The sheer scale of walking across an entire country, navigating through varied terrain and diverse environments, presents a formidable physical and logistical challenge for the protagonist.</li>
                <li><strong>Cultural Immersion:</strong> The narrative delves into the traveler's interactions with local communities, delving into cultural traditions, customs, and language, fostering a deep understanding of Japan's rich heritage.</li>
                <li><strong>Personal Transformation:</strong> As the protagonist overcomes obstacles and embraces new experiences, the journey becomes a catalyst for self-reflection, introspection, and personal growth.</li>
                <li><strong>Narrative Style:</strong> The story is often told from a first-person perspective, allowing readers to intimately connect with the traveler's thoughts, emotions, and evolving perspectives.</li>
            </ul>
            <h3>Fascinating Facts:</h3>
            <ul>
                <li>Approximately 73% of Japan is mountainous, presenting unique challenges for long-distance walking.</li>
                <li>Experienced hikers typically cover 3-4 miles (5-6 km) per hour on varied terrain.</li>
                <li>Most traverses of Japan span around 1,500-2,000 kilometers (900-1,200 miles).</li>
                <li>In Japanese tradition, long-distance walking (Henro) is a spiritual practice of pilgrimage and self-discovery.</li>
            </ul>
        </section>

        <section>
            <h2>Writing: "An Accomplishment"</h2>
            <p>Crafting a narrative about a personal accomplishment requires a specific grammatical approach to effectively convey the journey, challenges, and lessons learned. The narrative should demonstrate mastery of various verb tenses, descriptive language, and reflective tone to engage the reader and share the transformative experience.</p>
            <h3>Grammatical Composition:</h3>
            <ul>
                <li><strong>Predominance of Past Tense:</strong> The core of the narrative should be narrated in the past simple tense, establishing the chronology of events and highlighting the protagonist's actions and experiences.</li>
                <li><strong>Utilization of Present Perfect:</strong> This tense can be employed to convey the ongoing impact and lasting significance of the accomplishment, bridging the past and present.</li>
                <li><strong>Reflective Language:</strong> The inclusion of analytical, introspective phrases in the narrative allows the writer to share personal insights, growth, and lessons learned.</li>
                <li><strong>Narrative Structure:</strong> Effective accomplishment narratives often follow a chronological structure, guiding the reader through the challenge, obstacles, strategies, and ultimate achievement.</li>
            </ul>
            <h3>Engaging Grammatical Techniques:</h3>
            <ul>
                <li>Complex Sentences</li>
                <li>Diverse Verb Tenses</li>
                <li>Descriptive Adjectives</li>
                <li>Reflective Phrases</li>
            </ul>
        </section>

        <form action="" method="post">
            <section>
                <h2>Test Questions</h2>

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