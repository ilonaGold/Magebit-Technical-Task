<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <title>Magebit Technical Task</title>
    </head>
    
    <body>
        <header class="top-bar">
            <div class="logo">
                <picture>
                    <source media="(max-width: 480px)" srcset="images/logo_small.svg" class="logo-small">
                    <source media="(min-width: 481px)" srcset="images/logo_big.svg" class="logo-big">
                    <img src="images/logo_big.svg"> 
                </picture>
            </div>
                
            <nav>
                <ul class="nav">
                    <li><a href="#">About</a></li>
                    <li><a href="#">How it works</a></li>
                    <li><a href="#">Contact</a></li>    
                </ul>
            </nav>
        </header>

        <main class="wrapper">
            <div class="col-right">
                <picture>
                    <source media="(max-width: 375px)" srcset="images/image_pineapple_small.png">
                    <source media="(min-width: 376px)" srcset="images/image_pineapple_big.png">
                    <img src="images/image_pineapple_big.png" class="background-image" alt="pineapple with sunglasses and earphones">
                </picture>  
            </div> 
            
            <div class="content-wrapper col-left">
                <img src="images/success.svg" class="success-icon" id="success-icon"> 
                <h1 class="heading" id="heading">Subscribe to newsletter</h1>
                 <p class="subheading" id="subheading">Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
               
                <form class="submissionForm" id="submissionForm" action="./action_page.php" method="post">
                    <input type="email" name="email" placeholder="Type your email address here..." class="submissionForm-email-input" id="submissionForm-email-input">
                    <small class="error-message" id="error-message">Error message</small>
                    <div class="submissionForm-tos-group">
                        <label class="submissionForm-checkbox container">
                            <input class="submissionForm-checkbox-input" type="checkbox" name="agree" value="accepted" id="submissionForm-checkbox-input"> 
                            <span class="submissionForm-checkmark checkmark"></span>
                        </label>
                        <p class="submissionForm-tos-text">
                            <span>I agree to </span><span><a href="#">terms of service</a></span>
                        </p>
                    </div>
                    <button type="submit" name="submit" class="submissionForm-submit-button" id="submissionForm-submit-button">
                        <svg  width="24" height="14" viewBox="0 0 24 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path id="submissionForm-submission-button-path"  d="M17.7071 0.2929C17.3166 -0.0976334 16.6834 -0.0976334 16.2929 0.2929C15.9023 0.683403 15.9023 1.31658 16.2929 1.70708L20.5858 5.99999H1C0.447693 5.99999 0 6.44772 0 6.99999C0 7.55227 0.447693 7.99999 1 7.99999H20.5858L16.2929 12.2929C15.9023 12.6834 15.9023 13.3166 16.2929 13.7071C16.6834 14.0976 17.3166 14.0976 17.7071 13.7071L23.7071 7.70708C24.0977 7.31658 24.0977 6.6834 23.7071 6.2929L17.7071 0.2929Z"/>
                        </svg>
                    </button>
                </form>

                <div class="line-content-divider" id="line-content-divider"></div>

                <div class="social-media-icons">
                    <ul>
                       <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                       <li class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                       <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                       <li class="youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </main>
    
        <script src="app.js"></script>
    </body>
</html>