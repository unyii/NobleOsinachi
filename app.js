const { v4: uuidv4 } = require('uuid');
const { exec } = require('child_process');
const fs = require('fs');

const fileName = uuidv4();

const branchName = fileName.substring(0, 8);

const fileContent = `
cd "C:\\Users\\Noble\\SOURCES\\REPOS\\NobleOsinachi"

git pull origin main

git checkout -b ${branchName}

git add .

git commit -m "Created ${branchName} branch

Co-authored-by: Noble Osinachi <nobleosinachi98@gmail.com>
Co-authored-by: David Oluwasegun <oluwasegundavid7@gmail.com>
Co-authored-by: sifatfaysal <sifatfaysall@gmail.com>
Co-authored-by: Alireza Zahiri <itsalireza.zr@gmail.com>
Co-authored-by: Isaac Bassey <chartobyson2025@gmail.com>
Co-authored-by: Golden Chukwukere <66950981+iamGolden@users.noreply.github.com>
Co-authored-by: David Popoola <davieedpopoola@gmail.com>
Co-authored-by: Precious Adedibu <adedibuprecious@gmail.com>
Co-authored-by: Uchenna Ogbu <boluogbu@gmail.com>
Co-authored-by: NobleOsinachi <150407018@live.unilag.edu.ng>
Co-authored-by: David Oluwasegun <oluwasegundavid7@gmail.com>
Co-authored-by: iAmGolden <chuksgold29@gmail.com>
Co-authored-by: Ibukun <ibukunoladipupo10@gmail.com>
Co-authored-by: Sanowar Sunny <sanowarhossain3843@gmail.com>
"

git pull origin main

git push -u origin ${branchName}

hub pull-request -m "Created ${branchName} branch" -h ${branchName} -b main -f

# Only delete branch after all pulls have been merged by Golden
# git branch -d ${branchName}

# git push origin --delete ${branchName}
`;

// save script as powershell instead of batch
let file = `scripts\\${fileName + '.ps1'}`;

fs.writeFile(file, fileContent, (err) => {
    if (err) throw err;
    console.log('The file has been created!');

    // execute the cmd file in a new command prompt window
    let command = `start cmd /c ${file}`;

    //run in powershell instead 
    command = `start powershell .\\${file}`;

    console.log(command);

    exec(command, (error, stdout, stderr) => {
        if (error) {
            console.error(`Error: ${error.message}`);
            return;
        }
        if (stderr) {
            console.error(`stderr: ${stderr}`);
            return;
        }
        console.log(`stdout: ${stdout}`);
    });
});
