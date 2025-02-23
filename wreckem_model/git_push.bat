@echo off
echo Starting Git pull and push...
cd /d "X:\wreckem_model"

REM Ensure we have the latest changes from the remote repository
git pull origin main --rebase

REM Stage all changes
git add .

REM Commit with a timestamp
git commit -m "Automated commit from Task Scheduler - %date% %time%"

REM Push changes
git push origin main

echo Git pull and push complete.
exit
