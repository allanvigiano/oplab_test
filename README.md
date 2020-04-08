# Oplab interview

## Resume
Hi Oplab Team! This is my applicant test. Above you can access the solutions:
- General test
    - 1, 2, 3 and 4 you can access [here](#My-App).
    - The gameOfStones (3) is also [here](#My-gameOfStones).
- Frontend is [here](https://github.com/allanvigiano/oplab_frontend_test).
- Backend is [here](#My-Backend-Test).

Please send me a message at allanvigiano@gmail.com if you have any doubt. Thank you all for giving me this opportunity.

## My App
You can run it following these steps:
> Please, install PHP and Node.js before.
1. Change to project folder: `cd oplab_test`
2. Install libraries: `npm install`
3. Run the PHP server: `php -S localhost:8000`
3. Run the Vue dev server: `npm run dev`

## My gameOfStones
```javascript
// Complete the gameOfStones function below.
function gameOfStones(n) {
    
    if (checkP2(n % 7)) {
        //I'm really impressed about this solution. I took close to 5 hours to find out.
        //After drawing the game from 0 to 16, I could see the solution! It's so interesting!
        return 'Second';
    }
    else {
        return 'First';
    }

}
function checkP2(board) {
    //When the player leaves 0 or 1 stone at the board, he wins.
    if(board == 0 || board == 1) {
        return true;
    }
    else {
        return false;
    }
}

```
## My Backend Test
- Suppose you're working with 3 people on a project. What would be **the** ideal software development process?
> An Agile Methodology of software development would fit perfectly in this situation. From scratch, I would order features by importance and add value to the client (or product owner). One or more features would be inserted on each cycle that, at the end, would deliver a usable product. These small functionalities would be sliced on small activities to be developed. At this point, a Kanban board would suit to manage the cycle activities. Its process is simple and keep a global vision of the project. Each developer could catch an activity on the waiting line respecting the priority and keeping contact with the client to solve the doubts.
- How do you think an entity relationship diagram for _Instagram_ would be like?
> The ER diagram would have some entities like: User, Post, Comment. The users could make a relationship with each other creating a friendship. A post needs an author user and can have some comments. A comment is related to a user and a post. Following, I’ll list some attributes of these entities:
User: name, username, email, birthday, phone.
Post: date, author, media (photo/video), text, local, user.
Comment: text, date, post, user.
- Now that you have imagined the ER diagram, **how** would you build _Instagram_ from scratch?
>At first, I would make a prototype that will evolve incrementally until minimum product to launch. I would start the app from the user register and a simple login screen. Then I would develop a feature to create a post and a user profile preview. Every feature must be validated from users to get some tips and suggestions. On each iteration I would deliver a functional app and I would repeat the process until it hits the minimum product to launch. In my opinion, this minimum product must have a secure login, user profile register, a way to connect to a friend and timeline reading. 

### Intro

Hi! If you wanna work with us, you gotta solve this first. Let's see what you've got!

### Instructions

1. This test should be forked, worked on, and then commited to Github, with every comment in **english**.
2. Every applicant should solve **all** the general questions.
3. An applicant must solve frontend questions if applying for a frontend position.
4. An applicant must solve backend questions if applying for a backend position.
5. Solving both, is a bonus :)
6. When you finish this test, send an e-mail containing the repository link and the salary expectations to <hungryforthisjob@oplab.com.br>
7. This test's instructions should be enough.
8. Happy Coding!

### General
Using your favorite programming language:

1. Implement bubble sort.
3. Implement a linked list.
4. Implement this [algorithm](https://www.hackerrank.com/challenges/game-of-stones-1)(💡️there is no need to signup to this website. Just commit the _gameOfStones_ function implementation and that's it.💡️).
5. Using the twitter API, create a script that given a word as an input, outputs the last 10 tweets containing that word.

### Frontend

_We will be evaluating everything, from reproduction accuracy, to process. If you use ( with mastery ) tools/frameworks such as `gulp`, `react`, `angular`, `webpack`, etc..; we will take that in consideration. Also: we care about beautiful code (~~var~~) 👾_

Reproduce, faithfully, this [page]( http://ydirection.com/Aria/index-3.html ).

### Backend

_I know, I know... It looks easy compared to the frontend challenge; but don't be fooled! We expect **more** from your answers in here! We will evaluate **how** you answer, and your answer's organization and structure!_

Answer the following questions:
- Suppose you're working with 3 people on a project. What would be **the** ideal software development process?
- How do you think an entity relationship diagram for _Instagram_ would be like?
- Now that you have imagined the ER diagram, **how** would you build _Instagram_ from scratch?


That's it! Thanks for doing this test!

🚀
