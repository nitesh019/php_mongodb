<?php
  
require 'vendor/autoload.php'; // Include Composer's autoloader

$client = new MongoDB\Client("mongodb://localhost:27017"); // Connect to MongoDB server
$database = $client->with_php; // Select your database
$collection = $database->blog; // Select your collection

# Insert Record -- C
// Create a new document
// $newDocument = [
//   'title' => 'My First Post',
//   'content' => 'This is the content of my first post.',
//   'created_at' => new MongoDB\BSON\UTCDateTime()
// ];

// Insert the document
// $insertResult = $collection->insertOne($newDocument);
// echo "Inserted document with ID: " . $insertResult->getInsertedId() . "\n";


# Read Record -- R
// Read a single document
// $document = $collection->findOne(['title' => 'My First Post']);
// if ($document) {
//     echo "Title: " . $document['title'] . "<br>";
//     echo "Content: " . $document['content'] . "<br>";
// }
// echo "<hr>";
// Read multiple documents
// $documents = $collection->find();
// foreach ($documents as $doc) {
//     echo "Title: " . $doc['title'] . "<br>";
// }

# Record Update - U
// Update a document
// $updateResult = $collection->updateOne(
//   ['title' => 'My First Post'], // Filter
//   ['$set' => ['content' => 'Updated content for my first post.']] // Update operation
// );
// echo "Matched {$updateResult->getMatchedCount()} document(s)"."<br>";
// echo "Modified {$updateResult->getModifiedCount()} document(s)"."<br>";
// echo "<hr>";

// Record Delete - D
$deleteResult = $collection->deleteOne(['title' => 'My First Post']);
echo "Deleted {$deleteResult->getDeletedCount()} document(s)";