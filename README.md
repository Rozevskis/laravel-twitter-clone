**Twitter Clone Project**
=========================

**Overview**
------------

This project is a Twitter clone built using [Vue.js](https://vuejs.org/) and [Tailwind CSS](https://tailwindcss.com/). The project aims to replicate most of the functionality of Twitter.

**Current Status**
------------------

The project is currently in development, with most of the Twitter functionality implemented. However, there are some known issues and limitations:

* **User functionality**: Currently, user authentication and profile management do not exist. This means that users cannot log in, create accounts, or manage their profiles.
* **Video upload bug**: When uploading a video, it may not appear immediately. Refreshing the page and scrolling to the correct position may be required to view the uploaded video.
* **Scroll bar issue**: The scroll bar is currently in the wrong position, which may cause issues with navigation and usability.

**Implemented Features**
------------------------

* **Tweeting**: Tweet creation
* **Tweeting**: Tweet image and video uploads
* **Tweet display**: Tweets are displayed in a feed
* **Tweeting**: Tweets can be deleted

## Installation

1. Clone the repository:

   ```
   git clone https://github.com/Rozevskis/laravel-twitter-clone.git
   ```

2. Install dependencies:

   ```
   cd laravel-twitter-clone
   composer install
   npm install
   ```

3. Create a `.env` file and set up the database:

   ```
   cp .env.example .env
   php artisan key:generate
   php artisan migrate
   ```

4. Start the development server:

   ```
   php artisan serve
   ```

5. Open the application in your browser:

   ```
   http://localhost:8000
   ```


## Contributing

Contributions are welcome! Please open an issue or submit a pull request.



Note that this is just a basic template and you may want to add more information and sections to your README.


**Future Development**
----------------------

The project will continue to evolve and improve, with a focus on addressing the known issues and implementing new features. Some planned features include:

* **User authentication**: Implementing user authentication and profile management.
* **Video upload fix**: Fixing the video upload bug to ensure that videos appear immediately.
* **Scroll bar fix**: Fixing the scroll bar issue to improve navigation and usability.
* **Additional features**: Implementing additional features, such as direct messaging, tweet threading, and more.

**Pictures**
--------------
![Screenshot_10](https://github.com/user-attachments/assets/c8357d8a-379f-4818-b644-817832ca206e)
![Screenshot_11](https://github.com/user-attachments/assets/db722386-71ba-4983-8031-2a17920f11d5)
