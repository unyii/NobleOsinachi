color 0a

cd "C:\Users\Noble\SOURCES\REPOS\test"

git pull origin main

git checkout -b f4e739cc

git add .

git commit -m "Created f4e739cc branch 

Co-authored-by: Noble Osinachi <nobleosinachi98@gmail.com>
Co-authored-by: David Oluwasegun <oluwasegundavid7@gmail.com>
Co-authored-by: iAmGolden <chuksgold29@gmail.com>
Co-authored-by: Ibukun <ibukunoladipupo10@gmail.com>

Co-authored-by: Sanowar Sunny <ibukunoladipupo10@gmail.com>

SANOWAR HOSSAIN SUNNY sanowarhossain3843@gmail.com

"

git pull origin main

git push -u origin f4e739cc

hub pull-request -m "Created f4e739cc branch" -h f4e739cc -b main -f

# Only delete branch after all pulls have been merged by Golden
# git branch -d f4e739cc

# git push origin --delete f4e739cc

