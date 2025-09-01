const fs = require('fs');
const path = require('path');

function generateVariables(done) {
    const colorsFilePath = path.join(__dirname, '../../src/abstracts/_colors.scss');
    const variablesFilePath = path.join(__dirname, '../../src/abstracts/_variables.scss');
    const defsFilePath = path.join(__dirname, '../../src/defs.scss');

    fs.readFile(colorsFilePath, 'utf8', (err, data) => {
        if (err) {
            console.error('Error reading _colors.scss:', err);
            done();
            return;
        }

        const colorVariables = data.match(/\$var-clr-[\w-]+: [^;]+;/g);
        if (!colorVariables) {
            console.error('No color variables found in _colors.scss');
            done();
            return;
        }

        const variablesContent = colorVariables.map(variable => {
            const [name] = variable.split(': ');
            return `$${name.slice(5)}: var(--${name.slice(9)});`;
        }).join('\n');

        const defsContent = `@use 'abstracts/colors' as *;\n\n:root {\n` + colorVariables.map(variable => {
            const [name] = variable.split(': ');
            return `  --${name.slice(9)}: #{$${name.slice(1)}};`;
        }).join('\n') + `\n}`;

        fs.writeFile(variablesFilePath, variablesContent, 'utf8', err => {
            if (err) {
                console.error('Error writing _variables.scss:', err);
                done();
                return;
            }
            console.log('_variables.scss generated successfully');
        });

        fs.writeFile(defsFilePath, defsContent, 'utf8', err => {
            if (err) {
                console.error('Error writing defs.scss:', err);
                done();
                return;
            }
            console.log('defs.scss generated successfully');
        });

        done();
    });
}

module.exports = generateVariables;