<?php
/**
 * QuizMaster Pro - Question Fetcher API
 * Simple version that works without database setup
 */

// Set proper headers for JSON API
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight requests
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Quiz questions - no database needed!
$questions = [
    // Geography Questions
    [
        'question' => 'What is the capital of France?',
        'answer' => 'Paris',
        'options' => ['London', 'Berlin', 'Paris', 'Madrid']
    ],
    [
        'question' => 'Which country has the most natural lakes?',
        'answer' => 'Canada',
        'options' => ['Russia', 'Canada', 'Finland', 'Sweden']
    ],
    [
        'question' => 'What is the smallest country in the world?',
        'answer' => 'Vatican City',
        'options' => ['Monaco', 'San Marino', 'Vatican City', 'Liechtenstein']
    ],
    [
        'question' => 'Which river is the longest in the world?',
        'answer' => 'Nile River',
        'options' => ['Amazon River', 'Nile River', 'Mississippi River', 'Yangtze River']
    ],
    [
        'question' => 'Mount Everest is located in which mountain range?',
        'answer' => 'Himalayas',
        'options' => ['Andes', 'Rocky Mountains', 'Alps', 'Himalayas']
    ],

    // Science Questions
    [
        'question' => 'Which planet is known as the Red Planet?',
        'answer' => 'Mars',
        'options' => ['Venus', 'Mars', 'Jupiter', 'Saturn']
    ],
    [
        'question' => 'What is the chemical symbol for gold?',
        'answer' => 'Au',
        'options' => ['Go', 'Gd', 'Au', 'Ag']
    ],
    [
        'question' => 'How many bones are there in an adult human body?',
        'answer' => '206',
        'options' => ['196', '206', '216', '226']
    ],
    [
        'question' => 'What gas makes up about 78% of Earth\'s atmosphere?',
        'answer' => 'Nitrogen',
        'options' => ['Oxygen', 'Carbon Dioxide', 'Nitrogen', 'Argon']
    ],
    [
        'question' => 'What is the speed of light in vacuum?',
        'answer' => '299,792,458 m/s',
        'options' => ['299,792,458 m/s', '300,000,000 m/s', '186,000 m/s', '150,000,000 m/s']
    ],

    // Mathematics Questions
    [
        'question' => 'What is 2 + 2?',
        'answer' => '4',
        'options' => ['3', '4', '5', '6']
    ],
    [
        'question' => 'What is the value of π (pi) to 2 decimal places?',
        'answer' => '3.14',
        'options' => ['3.12', '3.14', '3.16', '3.18']
    ],
    [
        'question' => 'What is 15% of 200?',
        'answer' => '30',
        'options' => ['25', '30', '35', '40']
    ],
    [
        'question' => 'What is the square root of 144?',
        'answer' => '12',
        'options' => ['10', '11', '12', '13']
    ],
    [
        'question' => 'In a right triangle, what is the longest side called?',
        'answer' => 'Hypotenuse',
        'options' => ['Adjacent', 'Opposite', 'Hypotenuse', 'Base']
    ],

    // History Questions
    [
        'question' => 'In which year did World War II end?',
        'answer' => '1945',
        'options' => ['1944', '1945', '1946', '1947']
    ],
    [
        'question' => 'Who was the first person to walk on the moon?',
        'answer' => 'Neil Armstrong',
        'options' => ['Buzz Aldrin', 'Neil Armstrong', 'John Glenn', 'Alan Shepard']
    ],
    [
        'question' => 'The ancient city of Troy was located in which modern-day country?',
        'answer' => 'Turkey',
        'options' => ['Greece', 'Italy', 'Turkey', 'Egypt']
    ],
    [
        'question' => 'Which empire was ruled by Julius Caesar?',
        'answer' => 'Roman Empire',
        'options' => ['Greek Empire', 'Roman Empire', 'Persian Empire', 'Egyptian Empire']
    ],
    [
        'question' => 'The Berlin Wall fell in which year?',
        'answer' => '1989',
        'options' => ['1987', '1988', '1989', '1990']
    ],

    // Art & Literature Questions
    [
        'question' => 'Who painted the Mona Lisa?',
        'answer' => 'Leonardo da Vinci',
        'options' => ['Pablo Picasso', 'Vincent van Gogh', 'Leonardo da Vinci', 'Michelangelo']
    ],
    [
        'question' => 'Who wrote the novel "1984"?',
        'answer' => 'George Orwell',
        'options' => ['Aldous Huxley', 'George Orwell', 'Ray Bradbury', 'H.G. Wells']
    ],
    [
        'question' => 'Which artist cut off his own ear?',
        'answer' => 'Vincent van Gogh',
        'options' => ['Pablo Picasso', 'Vincent van Gogh', 'Claude Monet', 'Salvador Dalí']
    ],
    [
        'question' => 'Who composed "The Four Seasons"?',
        'answer' => 'Antonio Vivaldi',
        'options' => ['Johann Bach', 'Wolfgang Mozart', 'Antonio Vivaldi', 'Ludwig Beethoven']
    ],
    [
        'question' => 'Which Shakespeare play features the characters Romeo and Juliet?',
        'answer' => 'Romeo and Juliet',
        'options' => ['Hamlet', 'Macbeth', 'Romeo and Juliet', 'Othello']
    ],

    // Technology & Programming Questions
    [
        'question' => 'Which programming language is known as the "language of the web"?',
        'answer' => 'JavaScript',
        'options' => ['Python', 'Java', 'JavaScript', 'C++']
    ],
    [
        'question' => 'What does "HTML" stand for?',
        'answer' => 'HyperText Markup Language',
        'options' => ['High Tech Modern Language', 'HyperText Markup Language', 'Home Tool Markup Language', 'Hyperlink and Text Markup Language']
    ],
    [
        'question' => 'Who founded Microsoft?',
        'answer' => 'Bill Gates',
        'options' => ['Steve Jobs', 'Bill Gates', 'Mark Zuckerberg', 'Larry Page']
    ],
    [
        'question' => 'What does "AI" stand for in technology?',
        'answer' => 'Artificial Intelligence',
        'options' => ['Automated Intelligence', 'Artificial Intelligence', 'Advanced Intelligence', 'Algorithmic Intelligence']
    ],
    [
        'question' => 'Which company developed the iPhone?',
        'answer' => 'Apple',
        'options' => ['Samsung', 'Google', 'Apple', 'Microsoft']
    ],

    // Sports Questions
    [
        'question' => 'How many players are on a basketball team on the court at one time?',
        'answer' => '5',
        'options' => ['4', '5', '6', '7']
    ],
    [
        'question' => 'In which sport would you perform a slam dunk?',
        'answer' => 'Basketball',
        'options' => ['Volleyball', 'Basketball', 'Tennis', 'Baseball']
    ],
    [
        'question' => 'How often are the Summer Olympic Games held?',
        'answer' => 'Every 4 years',
        'options' => ['Every 2 years', 'Every 3 years', 'Every 4 years', 'Every 5 years']
    ],
    [
        'question' => 'Which country has won the most FIFA World Cups?',
        'answer' => 'Brazil',
        'options' => ['Germany', 'Argentina', 'Brazil', 'Italy']
    ],
    [
        'question' => 'In golf, what is the term for one stroke under par?',
        'answer' => 'Birdie',
        'options' => ['Eagle', 'Birdie', 'Bogey', 'Albatross']
    ],

    // Nature & Animals Questions
    [
        'question' => 'What is the largest ocean on Earth?',
        'answer' => 'Pacific Ocean',
        'options' => ['Atlantic Ocean', 'Indian Ocean', 'Arctic Ocean', 'Pacific Ocean']
    ],
    [
        'question' => 'Which animal is known as the "King of the Jungle"?',
        'answer' => 'Lion',
        'options' => ['Tiger', 'Lion', 'Elephant', 'Leopard']
    ],
    [
        'question' => 'How many hearts does an octopus have?',
        'answer' => '3',
        'options' => ['1', '2', '3', '4']
    ],
    [
        'question' => 'Which bird is known for its ability to mimic human speech?',
        'answer' => 'Parrot',
        'options' => ['Crow', 'Parrot', 'Eagle', 'Owl']
    ],
    [
        'question' => 'What is the fastest land animal?',
        'answer' => 'Cheetah',
        'options' => ['Lion', 'Horse', 'Cheetah', 'Gazelle']
    ],

    // Food & Culture Questions
    [
        'question' => 'Which spice is derived from the Crocus flower?',
        'answer' => 'Saffron',
        'options' => ['Turmeric', 'Saffron', 'Paprika', 'Cinnamon']
    ],
    [
        'question' => 'What is the main ingredient in guacamole?',
        'answer' => 'Avocado',
        'options' => ['Tomato', 'Avocado', 'Lime', 'Onion']
    ],
    [
        'question' => 'Which country is famous for inventing pizza?',
        'answer' => 'Italy',
        'options' => ['France', 'Italy', 'Greece', 'Spain']
    ],
    [
        'question' => 'What type of pastry is used to make profiteroles?',
        'answer' => 'Choux pastry',
        'options' => ['Puff pastry', 'Shortcrust pastry', 'Choux pastry', 'Filo pastry']
    ],
    [
        'question' => 'Which tea is known for its distinctive smoky flavor?',
        'answer' => 'Lapsang Souchong',
        'options' => ['Earl Grey', 'English Breakfast', 'Lapsang Souchong', 'Darjeeling']
    ]
];

// Select a random question
$randomIndex = array_rand($questions);
$selectedQuestion = $questions[$randomIndex];

// Don't shuffle options to avoid answer mismatch issues
// Keep options in original order to ensure answer matching works correctly
$optionsArray = $selectedQuestion['options'];

// Create response data
$response = [
    'success' => true,
    'question' => [
        'id' => $randomIndex + 1,
        'question' => trim($selectedQuestion['question']),
        'answer_type' => 'text',
        'answer' => trim($selectedQuestion['answer'])
    ],
    'options' => array_map(function($option, $index) {
        return [
            'id' => $index + 1,
            'option_type' => 'text',
            'option_content' => trim($option)
        ];
    }, $optionsArray, array_keys($optionsArray)),
    'metadata' => [
        'total_options' => count($optionsArray),
        'fetched_at' => date('c'),
        'question_id' => $randomIndex + 1,
        'source' => 'simple_questions'
    ]
];

// Output the JSON response
echo json_encode($response, JSON_PRETTY_PRINT);
?>