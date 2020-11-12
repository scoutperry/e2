<form action='cakeOrder.php'>
    <div>
        Choose your cake size:
        <input type='radio' name='size' id='small'>
        <label for='small'>Small (6")</label>
        <input type='radio' name='size' id='medium'>
        <label for='medium'>Medium (8")</label>
        <input type='radio' name='size' id='large'>
        <label for='large'>Large (12")</label>
    </div>
    <div>
        You can have 2 lines of writing on your cake; what would you like them to say?
        <label for='line1'>Line 1</label>
        <input type='text' id='line1'>
        <label for='line2'>Line 2</label>
        <input type='text' id='line2'>
    </div>
    <div>
        Choose your cake flavor:
        <select id='flavor'>
            <option>Choose one...</option>
            <option>Vanilla</option>
            <option>Chocolate</option>
            <option>Red Velvet</option>
            <option>Funfetti</option>
        </select>
    </div>
    <div>
        Choose your icing:
        <select id='icing'>
            <option>Choose one...</option>
            <option>Vanilla</option>
            <option>Chocolate</option>
            <option>Buttercream</option>
            <option>Funfetti</option>
        </select>
    </div>
    <div>
        Would you like to add any of the following extras to your order?
        <input type='checkbox' value='insulated' id='insulated'>
        <label for='insulated'>Insulated Box</label>
        <input type='checkbox' value='candles' id='candles'>
        <label for='candles'>Candles</label>
        <input type='checkbox' value='platter' id='platter'>
        <label for='platter'>Glass serving platter</label>
        <input type='checkbox' value='forks' id='forks'>
        <label for='forks'>Compostable serving plates and forks</label>
    </div>
    <div>
        <label for='instructions'>Special instructions</label>
        <textarea id='instructions'></textarea>
    </div>

    <button type='submit'>Submit your order</button>
</form>

<form action='cakeOrder.php'>
    <div>
        Choose your cake size:
        <input type='radio' name='size' id='small'>
        <label for='small'>Small (6")</label>
        <input type='radio' name='size' id='medium' checked>
        <label for='medium'>Medium (8")</label>
        <input type='radio' name='size' id='large'>
        <label for='large'>Large (12")</label>
    </div>
    <div>
        You can have 2 lines of writing on your cake; what would you like them to say?
        <label for='line1'>Line 1</label>
        <input type='text' id='line1' value='Happy birthday'>
        <label for='line2'>Line 2</label>
        <input type='text' id='line2' value='Jamal!'>
    </div>
    <div>
        Choose your cake flavor:
        <select id='flavor'>
            <option>Choose one...</option>
            <option selected>Vanilla</option>
            <option>Chocolate</option>
            <option>Red Velvet</option>
            <option>Funfetti</option>
        </select>
    </div>
    <div>
        Choose your icing:
        <select id='icing'>
            <option>Choose one...</option>
            <option>Vanilla</option>
            <option selected>Chocolate</option>
            <option>Buttercream</option>
            <option>Funfetti</option>
        </select>
    </div>
    <div>
        Would you like to add any of the following extras to your order?
        <input type='checkbox' value='insulated' id='insulated'>
        <label for='insulated'>Insulated Box</label>
        <input type='checkbox' value='candles' id='candles'>
        <label for='candles'>Candles</label>
        <input type='checkbox' value='platter' id='platter'>
        <label for='platter'>Glass serving platter</label>
        <input type='checkbox' value='forks' id='forks'>
        <label for='forks'>Compostable serving plates and forks</label>
    </div>
    <div>
        <label for='instructions'>Special instructions</label>
        <textarea id='instructions'>Extra icing please!</textarea>
    </div>

    <button type='submit'>Submit your order</button>
</form>