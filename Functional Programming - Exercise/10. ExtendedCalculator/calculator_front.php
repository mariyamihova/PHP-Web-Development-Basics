<form>
    <input type="text" name="numA"/>
    <input type="text" name="numB"/>
    <select name="operation">
        <option name="sum">+</option>
        <option name="subtract">-</option>
        <option name="multiply">*</option>
        <option name="divide">/</option>
        <option name="average">avg</option>
        <option name="factorial">n!</option>
    </select>
    <?php if (isset($result)) : ; ?>
        <div>
            <label for="result">Result:</label>
            <input type="text" id="result" disabled value="<?= $result ?>">
        </div>
    <?php endif; ?>
    <div>
        <button>Calculate</button>
    </div>
</form>