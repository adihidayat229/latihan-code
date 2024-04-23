document.getElementById('submitData').addEventListener('click', function() {
    const inputData = document.getElementById('dataInput').value;
    document.getElementById('displayData').innerText = inputData;
});

document.getElementById('printData').addEventListener('click', function() {
    const printData = document.getElementById('displayData').innerText;
    const myWindow = window.open('', 'Print Window', 'height=400,width=800');
    myWindow.document.write(`
        <html>
            <head>
                <title>Print Data</title>
            </head>
            <body>
                <h1>Print Data:</h1>
                <p>${printData}</p>
            </body>
        </html>
    `);
    myWindow.document.close();
    myWindow.focus();
    myWindow.print();
    myWindow.close();
});

document.getElementById('printData').addEventListener('click', function() {
    const inputData = document.getElementById('dataInput').value;
    const htmlCssOutput = `
        <h1>Data:</h1>
        <p>${inputData}</p>
    `;
    document.getElementById('htmlCssOutput').innerHTML = htmlCssOutput;
});