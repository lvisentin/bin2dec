<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bin2Dec</title>
    </head>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    html, body {
        width: 100%;
        height: 100%;
    }

    #app {
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: #0a2b4e;
    }

    h1 {
        color: white;
    }

    form {
        text-align: center;
    }

    label {
        color: white;
        font-size: 14px;
    }

    input {
        border: 0px;
        border-radius: 5px;
        height: 40px;
        width: 250px;
        margin-top: 10px;
        padding: 5px 10px;
    }

    .div-input {
        margin: 20px;
    }

    button {
        width: 250px;
        height: 40px;
        border-radius: 5px;
        text-align: center;
        border: none;
    }

    input[disabled] {
        color: white;
    }

    </style>
    <body>
        <div id="app">
            <h1>Bin2Dec - Binary To Decimal Numbers</h1>
            <div id="form-div">
                <form v-on:submit.prevent="onSubmit" method="POST">
                    <div class="div-input">
                        <label for="bin_input">
                            Type here:
                        </label><br>
                        <input
                            type="text"
                            maxlength="8"
                            placeholder="insert your binary number"
                            v-model:value="bin_input"
                            name="bin_input"
                        >
                    </div>
                    <div class="div-input">
                        <label for="dec_input">
                            Here is the result:
                        </label><br>
                        <input
                            type="text"
                            disabled
                            name="dec_input"
                            :value="dec_val"
                        >
                    </div>
                    <button type="submit"> Submit</button>
                </form>
                <p class="signature">Made by: <a href="https://github.com/lvisentin">lvisentin</a></p>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script>
        var app = new Vue({
            el: '#app',
            data: {
                bin_input: '',
                dec_val: ''
            },
            methods: {
                onSubmit: () => {
                    const parsed = parseInt(app.bin_input, 2);
                    app.dec_val = parsed ? parsed : 'This is not binary'; 
                },
            }
        });
        </script>
    </body>
</html>
