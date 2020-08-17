# Notes for dev purposes

## Renaming files from _ to -

```` Powershell
Get-ChildItem . | Rename-Item -NewName {$_.Name -replace '_', '-'}
````
