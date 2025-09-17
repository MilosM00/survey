<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("partials/head.html"); ?>

    <link rel="stylesheet" href="styles/index.css">

    <title>Survey | Eagle</title>
</head>

<body>

    <?php include("partials/navbar.html"); ?>

    <div class="container">

        <form method="POST" action="thank-you.html">

            <h6>
                <b>Questions marked with a star (<span style="color:#ff0000;">*</span>) are required.</b>
            </h6>
    
            <div class="question">
    
                <p><b style="color:#ff0000;">*</b> <b>1. How would you rate the quality of the service you are using?</b></p>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-one-radio"
                        value="I am very dissatisfied with the quality of the service I am using."
                        name="Q1"
                        id="quality1"
                    />
                    <label for="quality1">Very dissatisfied</label>
                </div>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-one-radio"
                        value="I am dissatisfied with the quality of the service I am using."
                        name="Q1"
                        id="quality2"
                    />
                    <label for="quality2">Dissatisfied</label>
                </div>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-one-radio"
                        value="I am neutral about the quality of the service I am using."
                        name="Q1"
                        id="quality3"
                    />
                    <label for="quality3">Neutral</label>
                </div>
    
                <div class="option">
                    <input type="radio"
                        required
                        class="question-one-radio"
                        value="I am satisfied with the quality of the service I am using."
                        name="Q1"
                        id="quality4"
                    />
                    <label for="quality4">Satisfied</label>
                </div>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-one-radio"
                        value="I am very satisfied with the quality of the service I am using."
                        name="Q1"
                        id="quality5"
                    />
                    <label for="quality5">Very satisfied</label>
                </div>
    
            </div>
    
            <div class="question">
    
                <p>
                    <b style="color:#ff0000;">*</b> <b>2. How would you rate the professionalism and helpfulness of our technical support administrators?</b>
                </p>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-two-radio"
                        value="I am very dissatisfied with the professionalism and helpfulness of the technical support administrator."
                        name="Q2"
                        id="rating1"
                    />
                    <label for="rating1">Very dissatisfied</label>
                </div>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-two-radio"
                        value="I am dissatisfied with the professionalism and helpfulness of the technical support administrator."
                        name="Q2"
                        id="rating2"
                    />
                    <label for="rating2">Dissatisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-two-radio"
                        value="I am neutral about the professionalism and helpfulness of the technical support administrator."
                        name="Q2"
                        id="rating3"
                    />
                    <label for="rating3">Neutral</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-two-radio"
                        value="I am satisfied with the professionalism and helpfulness of the technical support administrator."
                        name="Q2"
                        id="rating4"
                    />
                    <label for="rating4">Satisfied</label>
                </div>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-two-radio"
                        value="I am very satisfied with the professionalism and helpfulness of the technical support administrator."
                        name="Q2"
                        id="rating5"
                    />
                    <label for="rating5">Very satisfied</label>
                </div>
    
            </div>
    
            <div class="question">
    
                <p><b style="color:#ff0000;">*</b> <b>3. Are you satisfied with the quality of service, technical expertise, and responses provided by the administrators you spoke with?</b></p>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-three-radio"
                        value="I am very dissatisfied with the quality, technical expertise and responses received from the administrators I spoke with."
                        name="Q3"
                        id="security1"
                    />
                    <label for="security1">Very dissatisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-three-radio"
                        value="I am dissatisfied with the quality, technical expertise and responses received from the administrators I spoke with."
                        name="Q3"
                        id="security2"
                    />
                    <label for="security2">Dissatisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-three-radio"
                        value="I am neutral about the quality, technical expertise and responses received from the administrators I spoke with."
                        name="Q3"
                        id="security3"
                    />
                    <label for="security3">Neutral</label>
                </div>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-three-radio"
                        value="I am satisfied with the quality, technical expertise and responses received from the administrators I spoke with."
                        name="Q3"
                        id="security4"
                    />
                    <label for="security4">Satisfied</label>
                </div>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-three-radio"
                        value="I am very satisfied with the quality, technical expertise and responses received from the administrators I spoke with."
                        name="Q3"
                        id="security5"
                    />
                    <label for="security5">Very satisfied</label>
                </div>
    
            </div>
    
            <div class="question">
    
                <p><b style="color:#ff0000;">*</b> <b>4. How would you rate the speed at which our technical support team resolved your issue?</b></p>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-four-radio"
                        value="I am very unsatisfied with the speed of problem solving by tech support."
                        name="Q4"
                        id="speed1"
                    />
                    <label for="speed1">Very dissatisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-four-radio"
                        value="I am unsatisfied with the speed of problem solving by tech support."
                        name="Q4"
                        id="speed2"
                    />
                    <label for="speed2">Dissatisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-four-radio"
                        value="I am neutral about the speed of problem solving by tech support."
                        name="Q4"
                        id="speed3"
                    />
                    <label for="speed3">Neutral</label>
                </div>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-four-radio"
                        value="I am satisfied with the speed of problem solving by tech support."
                        name="Q4"
                        id="speed4"
                    />
                    <label for="speed4">Satisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-four-radio"
                        value="I am very satisfied with the speed of problem solving by tech support."
                        name="Q4"
                        id="speed5"
                    />
                    <label for="speed5">Very satisfied</label>
                </div>
    
            </div>

            <div class="question">

                <p><b style="color:#ff0000;">*</b> <b>5. Do you always get your issue resolved or receive the requested response after contacting Eagle's technical support?</b></p>

                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-five-radio"
                        value="I never solve the problem / get the requested answer after contacting the technical support of Eagle."
                        name="Q5"
                        id="answer1"
                    />
                    <label for="answer1">Never</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-five-radio"
                        value="I rarely solve the problem / get the requested answer after contacting the technical support of Eagle."
                        name="Q5"
                        id="answer2"
                    />
                    <label for="answer2">Rarely</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-five-radio"
                        value="I solve the problem / get the requested answer after contacting the technical support of Eagle, but it takes a long time."
                        name="Q5"
                        id="answer3"
                    />
                    <label for="answer3">I get a solution, but it takes a long time</label>
                </div>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-five-radio"
                        value="I always quickly solve the problem / get the requested answer after contacting the technical support of Eagle."
                        name="Q5"
                        id="answer4"
                    />
                    <label for="answer4">I always resolve it quickly</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-five-radio"
                        value="I have never used the services of the Call Center of Eagle before."
                        name="Q5"
                        id="answer5"
                    />
                    <label for="answer5">I have never used the technical support services before</label>
                </div>

            </div>

            <div class="question">

                <p><b style="color:#ff0000;">*</b> <b>6. How would you rate our technician's response time and the speed of work completion at your location?</b></p>

                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-six-radio"
                        value="I am very unsatisfied with the speed of the technician's intervention and the speed of the work on site."
                        name="Q6"
                        id="works1"
                    />
                    <label for="works1">Very dissatisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-six-radio"
                        value="I am unsatisfied with the speed of the technician's intervention and the speed of the work on site."
                        name="Q6"
                        id="works2"
                    />
                    <label for="works2">Dissatisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-six-radio"
                        value="I am neutral about the speed of the technician's intervention and the speed of the work on site."
                        name="Q6"
                        id="works3"
                    />
                    <label for="works3">Neutral</label>
                </div>
    
                <div class="option">
                    <input
                        required
                        type="radio"
                        class="question-six-radio"
                        value="I am satisfied with the speed of the technician's intervention and the speed of the work on site."
                        name="Q6"
                        id="works4"
                    />
                    <label for="works4">Satisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-six-radio"
                        value="I am very satisfied with the speed of the technician's intervention and the speed of the work on site."
                        name="Q6"
                        id="works5"
                    />
                    <label for="works5">Very satisfied</label>
                </div>

            </div>

            <div class="question">

                <p><b style="color:#ff0000;">*</b> <b>7. How would you rate the professionalism and expertise of the technician who provided the service?</b></p>

                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-seven-radio"
                        value="I am very dissatisfied with the professionalism and expertise of the technician who performed the intervention."
                        name="Q7"
                        id="intervention1"
                    />
                    <label for="intervention1">Very dissatisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-seven-radio"
                        value="I am dissatisfied with the professionalism and expertise of the technician who performed the intervention."
                        name="Q7"
                        id="intervention2"
                    />
                    <label for="intervention2">Dissatisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-seven-radio"
                        value="I am neutral about the professionalism and expertise of the technician who performed the intervention."
                        name="Q7"
                        id="intervention3"
                    />
                    <label for="intervention3">Neutral</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-seven-radio"
                        value="I am satisfied with the professionalism and expertise of the technician who performed the intervention."
                        name="Q7"
                        id="intervention4"
                    />
                    <label for="intervention4">Satisfied</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-seven-radio"
                        value="I am very satisfied with the professionalism and expertise of the technician who performed the intervention."
                        name="Q7"
                        id="intervention5"
                    />
                    <label for="intervention5">Very satisfied</label>
                </div>

            </div>

            <div class="question">

                <p><b style="color:#ff0000;">*</b> <b>8. After the intervention, did the service work as expected?</b></p>

                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-eight-radio"
                        value="Yes, after the intervention the service worked as expected, without problems."
                        name="Q8"
                        id="expectations1"
                    />
                    <label for="expectations1">Yes, without issues</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-eight-radio"
                        value="Yes, after the intervention the service worked as expected, but there were minor problems."
                        name="Q8"
                        id="expectations2"
                    />
                    <label for="expectations2">Yes, but there were minor issues</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-eight-radio"
                        value="No, after the intervention the service did not work as expected, the problem was not fully resolved."
                        name="Q8"
                        id="expectations3"
                    />
                    <label for="expectations3">No, the problem was not fully resolved</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-eight-radio"
                        value="No, after the intervention the service did not work as expected, the problem is still present."
                        name="Q8"
                        id="expectations4"
                    />
                    <label for="expectations4">No, the problem is still present</label>
                </div>

            </div>

            <div class="question">

                <p><b style="color:#ff0000;">*</b> <b>9. Once your contract expires, would you consider renewing your cooperation with Eagle?</b></p>

                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-nine-radio"
                        value="Yes, I would most likely renew my cooperation with Eagle after the end of the User Agreement."
                        name="Q9"
                        id="contract1"
                    />
                    <label for="contract1">Yes, most likely</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-nine-radio"
                        value="Maybe after the expiration of the User Agreement, I would renew my cooperation with Eagle."
                        name="Q9"
                        id="contract2"
                    />
                    <label for="contract2">Maybe</label>
                </div>
    
                <div class="option">
                    <input 
                        required
                        type="radio"
                        class="question-nine-radio"
                        value="No, I would certainly not renew my cooperation with Eagle after the expiration of the User Agreement."
                        name="Q9"
                        id="contract3"
                    />
                    <label for="contract3">No, definitely not</label>
                </div>

            </div>

            <div class="question">
                
                <p><b style="color:#ff0000;">*</b> <b>10. How likely are you to recommend Eagle to your business partners and associates? (1 - Not at all, 10 - Very likely)</b></p>

                <labe>The selected value is: <strong>5</strong></labe>
                <input
                    oninput="displayRangeValue(this);"
                    style="width:100%;"
                    type="range"
                    value="5"
                    min="1"
                    max="10"
                    step="1"
                    name="Q10"
                />

                <div class="range-numbers">
                    <p>1</p>
                    <p>2</p>
                    <p>3</p>
                    <p>4</p>
                    <p>5</p>
                    <p>6</p>
                    <p>7</p>
                    <p>8</p>
                    <p>9</p>
                    <p>10</p>
                </div>

            </div>
    
            <div class="question" style="width: 100%;">
    
                <p><b>11. If you have any suggestions, feedback, or comments, please enter them in the field below. Your feedback helps us improve our services.</b></p>
    
                <textarea placeholder="Enter text here..." maxlength="100" name="Q11"></textarea>
    
            </div>
    
            <button type="submit" class="button-posalji">SEND</button>
    
        </form>

    </div>

    <?php include("partials/footer.html"); ?>

</body>

</html>