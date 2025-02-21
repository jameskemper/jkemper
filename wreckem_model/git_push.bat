@echo off
echo Starting Git push...
cd /d "X:\wreckem_model"

git add .
git commit -m "Automated commit from Task Scheduler"
git push origin main

echo Git push complete.
exit
