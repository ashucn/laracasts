# Git Me Some Version Control (Memo)      
https://laracasts.com/series/git-me-some-version-control/episodes/1     
  
推荐免费的git客户端软件： SourceTree   
Free Git and Hg Client for Mac and Windows: SourceTree  

### Section 01 Say Hi To Git 9:07   
install git : 可以使用homebrew来安装   
````  
git config --global user.name = 'ashu';
git config --global user.email = 'ashucn@gmail.com';
git config --global core.editor = 'subl';
````  
  
### Section 02 What Git Add Actually Does 5:28  
````  
git init
git status
git log
git diff filename.txt

git add filename.txt
git commit -m 'message'

````  

### Section 03 Fixing and Amending Commits 4:28  
````  
git log
git reset --soft commitNumber... // 代码没变，只是commitNumber变了
git reset --hard commitNumber... // 代码和commitNumber都变了，小心使用

````  

### Section 04 Basic Workflow 6:07  


### Section 05 Branching 10:14  
````  
开发新功能需要新建一个branch，尽量少的影响主branch(master)
git checkout -b new-branch-name // 创建新 branch -b => branch
....
git checkout branch-name // switch branch
git merge branch-name // merge another branch to current branch

git branch -d new-branch-name //完成后，记得把new-branch-name 的branch删除

````  

### Section 06 Handling Merge Conflicts 5:02  


### Section 07 Git Aliases 3:11  


### Section 08 Stash Away Changes 8:14  


### Section 09 Pushing to GitHub 6:26  


### Section 10 Rebasing 8:09  


### Section 11 Interactive Rebasing 10:17  


------
参考文章 
http://blog.csdn.net/hudashi/article/details/7664464/
http://githubrank.com/

