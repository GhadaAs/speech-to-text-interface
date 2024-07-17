# Speech to Text Interface

## Description
This project provides a web interface that continuously listens to the user's voice input, converts it to text using the Web Speech API, and saves the converted text to a MySQL database.

## Features
- Voice to Text Conversion: Converts spoken words into text.
- Continuous Listening: The interface continuously listens for voice input without needing a button press.
- Database Storage: Stores the converted text in a MySQL database.

## Files Overview
- index.html: The main HTML file that includes the JavaScript code to handle speech recognition and display the transcribed text on the web page. The page continuously listens for speech input without requiring a button click to start or stop the recording.
  
- save_transcript.php: The PHP file responsible for receiving the transcribed text from the client and storing it in the MySQL database.
    
## How to Run the Project
1. Setup the Environment:
    - Ensure you have XAMPP or any local server setup with Apache and MySQL running.
    - Place the project files in the htdocs directory of your XAMPP installation.
    
2. Access the Interface:
    - Open your web browser and navigate to http://localhost/speech_to_text/index.html.

3. Using the Interface:
    - The page will automatically start listening for voice input. You can start speaking, and the transcribed text will be displayed in real-time.
    - The transcribed text will also be sent to the server to be saved in the database.

## Screenshots
- Interface in Listening Mode:
  ![Listening Mode](path_to_screenshot_listening_mode.png)
- Database Entry:
  ![Database Entry](path_to_screenshot_database_entry.png)

## Author
Ghada As
