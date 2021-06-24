<?php require_once "include/header.php"?>

<form action="resultUrs.php" method="post" id="quiz">

<div class="questionBoxUrs">
<ol>
    
    <li>
    
        <h3>Welche Farbe hat das Blut eines Pfeilschwanzkrebs? </h3>
        
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
            <label for="question-1-answers-A">A) Grün </label>
        </div>
        
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
            <label for="question-1-answers-B">B) Blau</label>
        </div>
        
        <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
            <label for="question-1-answers-C">C) Gelb</label>
        </div>
        
        
    
    </li>
    
    <li>
    
        <h3>Schätze die Zahl der Augen einer Jakobsmuschel</h3>
        
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
            <label for="question-2-answers-A">A) 0-2</label>
        </div>
        
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B">B) 45-99</label>
        </div>
        
        <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
            <label for="question-2-answers-C">C) 180-250</label>
        </div>
        
        
    
    </li>
    
    <li>
    
        <h3>Können Fische hören?</h3>
        <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
            <label for="question-3-answers-A">A) Ja</label>
        </div>
        
        <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
            <label for="question-3-answers-B">B) Nein</label>
        </div>
        
        <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
            <label for="question-3-answers-C">C) Fische sind Freunde, kein Futter</label>
        </div>
        
        
    
    </li>
    
    <li>
    
        <h3>Nenne mir den schönsten See in der Schweiz</h3>
        
        <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
            <label for="question-4-answers-A">A) Vierwaldstättersee</label>
        </div>
        
        <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
            <label for="question-4-answers-B">B) Züriteich</label>
        </div>
        
        <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
            <label for="question-4-answers-C">C) Bodenpfütze</label>
        </div>
        
        
    
    </li>
    
    <li>
    
        <h3>Wie gross ist das Universum?</h3>
        
        <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
            <label for="question-5-answers-A">A) eher gross</label>
        </div>
        
        <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
            <label for="question-5-answers-B">B) winzig</label>
        </div>
        
        <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
            <label for="question-5-answers-C">C) Die Erde ist flach, es gibt kein Universum</label>
        </div>
        
        
    
    </li>

</ol>

<input type="submit" value="Auswertung" class="submitbtn" />

</form>

<?php require_once "include/footer.php"?>