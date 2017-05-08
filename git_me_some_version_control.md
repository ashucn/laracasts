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
````  
git branch // 目前的branch 名称
git branch -v // 所有branch最新的head信息
git status // 会显示 conflicts信息
git diff // 显示所有冲突内容信息
修改冲突内容，然后 git add , 结束冲突
````  

### Section 07 Git Aliases 3:11   
设置git命令快捷键   
可以在.bash_profile中设置   

### Section 08 Stash Away Changes 8:14    
暂时保存修改，返回代码状态为修改前状态。
````  
 git stash
 git stash list // 显示stash的列表 
 git stash apply stash@{2} // 返回指定stash前的状态
 git stash drop // 删除所有 stash
 git stash drop stash@{2} // 删除指定 stash 

 git stash branch feature/reporting // 基于进度创建分支  
````  

### Section 09 Pushing to GitHub 6:26  
````  
git clone
git add
git commit 
git push
````  
  

### Section 10 Rebasing 8:09   
参考文档： http://blog.csdn.net/hudashi/article/details/7664631/   
````  
git rebase master // 将master branch的修改合并到当前的branch  
````  
 

### Section 11 Interactive Rebasing 10:17  


------
参考文章 
http://blog.csdn.net/hudashi/article/details/7664464/
http://githubrank.com/

