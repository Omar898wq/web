<!DOCTYPE html>
<html>
    <head>
        <title>Omar's Portfolio</title>
        <link rel="icon" href="492_html5.jpg">

        <meta charset="UTF-8">
        <meta name="description" content="My name is Omar and I am a web developer and this is my Portfolio">
        <meta name="keywords" content="html,css,javascript,php">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="style.css">
        <script src="java_script.js" defer></script> 
    </head>

    <body>
        <header>
            <h1 class="c1">Hello, my name 's Omar and this is my Portfolio</h1>
            <p> <strong>And i'm a Web Developer</strong> </p>
            <img src="profile_pic.jpg" alt="profile pic" width="200">
            <hr>
        </header>

        <div class="div1">
            <img src="492_html5.jpg" width="300"> <br>
            <a href="https://twitter.com/" target="_blank">twitter</a> <br>
            <p>this is a test</p>
            <p>another test</p>
        </div>
        <hr>

        <main>
            <section>
                <h2>About Me</h2>
                <p class="c1">
                    I love coding, <del>but coding doesn't love me back</del>
                    <em id="ww">I'm building this website and still trying,</em> 
                    <ins>hoping one day it'll feel the same</ins>
                    <br><br>
                </p>

                <p id="t1">
                    And i like
                    <abbr title="HyperText Markup Language">HTML</abbr> and 
                    <abbr title="Cascading Style Sheets">CSS</abbr>.
                </p>
                <br>
                
                <h3>over flow</h3>
                <p class="overflow">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sapiente voluptate accusamus, ullam itaque beatae eum repellendus ex aspernatur inventore laborum modi doloribus.
                </p>
                <br>

                <p>
                    And this <q class="c1">quote i heared from wise writter i love</q>
                    <blockquote id="quote">
                        imagine this quote
                    </blockquote>
                </p>
                <br>

                <h3>Contact Me</h3>
                <a href="https://github.com" target="_blank" id="github">GitHub</a> 
                <a href="https://www.linkedin.com" target="_blank">LinkedIn</a>
                <a href="https://facebook.com" target="_blank">FaceBook</a>
                <a href="https://google.com" target="_blank">google</a>

                <br>
                <hr>

                <p>
                    Water is H<sub>2</sub>O 
                    and the area of a square is x<sup>2</sup>.
                </p>
            </section>

            <hr>

            <section>
                <h2>My Skills</h2>
                <ul>
                    <li class="c1">HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>Python</li>
                    <li>Java</li>
                    <li>C++
                        <ul>
                            <li>Data structure</li>
                            <li>problem Solving</li>
                        </ul>
                    </li>
                </ul>
                <br><br>
            </section>

            <section>
                <h2> And this is Python Code Example</h2>
                <pre>
                    <code>
                        print ("hello world")
                    </code>
                </pre>
            </section>

            <hr>

            <section>
                <h2>Projects</h2>
                <ol type="a">
                    <li>This portfolio and it was built with HTML and will soon be completed with CSS</li>
                    <li>Restrunt managment system by java</li>
                </ol>
            </section>

            <hr>

            <section>
                <h2>My Projects Table</h2>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Languages that used</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Portfolio Website</td>
                            <td>HTML</td>
                            <td>In Progress</td>
                        </tr>
                        <tr>
                            <td>Restrunt managment system</td>
                            <td>Java</td>
                            <td>Completed</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"> Total Completed projects</td>
                            <td>1</td>
                        </tr>
                    </tfoot>
                </table>
            </section>

            <hr>

            <section>
                <h2>Multimedia</h2>
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" width="300" height="200" frameborder="1"></iframe>
                <br><br>
                <video src="https://www.w3schools.com/html/mov_bbb.mp4" width="300" controls></video>
                <br>
            </section>

            <hr>
            
            <section>
                <h2>Contact Form</h2>
                <form method="post" action="submit.php" id="contactform" enctype="multipart/form-data">
                    <label for="username">Your Username:</label><br>
                    <input type="text" id="username" name="username">
                    <br>
                    
                    <label for="password">Your Password:</label><br>
                    <input type="password" id="password" name="password" required>
                    <br>

                    <label for="email">Your Email:</label><br>
                    <input type="email" id="email" name="email" required>
                    <br>

                    <label for="file">Your File:</label><br>
                    <input type="file" id="userfile" name="user_file">
                    <br>
                    
                    <label for="image">Your Image:</label><br>
                    <input type="file" id="image" name="image">
                    <br>
                   
                    <label for="volume">Volume:</label><br>
                    <input type="range" id="volume" name="volume">
                    <br>

                    <button type="submit">Submit All</button>
                    <button type="button">hello</button>
                </form>
            </section>

            <div class="container">
                <div class="child1">Hiiii</div>
                <div class="child2">my name</div>
                <div class="child3">is</div>
                <div class="child4">omarr</div>
            </div>

            <section>
                <h3>Lab Requirement: Grid Layout</h3>
                <div class="grid-container">
                    <div class="header">Grid Header</div>
                    <div class="sidebar">Grid Sidebar</div>
                    <div class="content">Grid Content</div>
                    <div class="footer">Grid Footer</div>
                </div>
            </section>

        </main>
    </body>

    <hr>

    <footer>
        <p>Copyright &copy; just imagine this copy rights </p>
    </footer>
</html>