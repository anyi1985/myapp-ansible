127.0.0.1

# Run the following commands for Ansible:

ansible -i host all -m ping 
ansible --private-key globalteck-virginia.pem -i host all -m ping
chmod 0600 globalteck-virginia.pem 


run command: `sudo vi /etc/wsl.conf` and make the updates: 
[automount]
options = "metadata"

Close the wsl terminal on vscode.

Open PowerShell as an Administrator:
Enter this command: `Get-Service LxssManager | Restart-Service`

or type wsl --shutdown

Go back to vscode and open the ubuntu terminal.
run `chmod 0600 globalteck-virginia.pem`
run `ansible --private-key globalteck-virginia.pem -i host all -m ping`



### Writing Playbooks
run playbook: ansible-playbook --private-key globalteck-virginia.pem -i host helloworld.yml

To install ubuntu package and create a playbook task, search in google for: ansible install packages ubuntu

To install packages it will fail except you run the update package on the server with apt-get
However, user needs to become sudo/root user



##### Ansible Templates #######
Sear ansible template module: https://docs.ansible.com/ansible/latest/collections/ansible/builtin/template_module.html
* j2 is the extension for ansible templates
Running the command: ansible-playbook --private-key globalteck-virginia.pem -i host dynamicwebsite.yml

** You can provide variable on task level, playbook level, or variable file OR ansible detecting conditions automatically.
Command for variable file at run time you pass the `-e` flag and variable name:
  - ansible-playbook --private-key globalteck-virginia.pem -i host dynamicwebsite.yml -e myname=Turaiya
  - ansible-playbook --private-key globalteck-virginia.pem -i host dynamicwebsite.yml -e "myname='Turaiya Simons' 'Killa Killa'"
  - ansible-playbook --private-key globalteck-virginia.pem -i host dynamicwebsite.yml -e "myname='Turaiya Simons' mywebsite='Killa Killa'"

** We can also pass variables in a dynmaic way via a file (e.g. like terraform.tfvars) 
command to run this dynamic process:
  - ansible-playbook --private-key globalteck-virginia.pem -i host dynamicwebsite.yml -e "@anyi.yml"


##### Ansible Variables #######
https://docs.ansible.com/ansible/latest/playbook_guide/playbooks_variables.html


#### Download or WGET modules ####
https://docs.ansible.com/ansible/latest/collections/ansible/builtin/get_url_module.html


#### ansible extract tar.gz module ####
https://docs.ansible.com/ansible/latest/collections/ansible/builtin/unarchive_module.html


#### How to utilize and provide a list of packages for installation in one task using a single module ####


 #### How to installl mysql ####
 https://medium.com/@kelom.x/ansible-mysql-installation-2513d0f70faf


 #### modify user for mysql_user module ####
 Search for: ansible mysql_user module



 #### Module to remove a file  #####
 Search: ansible file module
 https://docs.ansible.com/ansible/latest/collections/ansible/builtin/file_module.html


#### Restart Apache Service Module  #####

#### Restart Apache Service Module  #####
module mysql_db ansible
https://docs.ansible.com/ansible/latest/collections/community/mysql/mysql_db_module.html



#### Ansible Roles ####
This is the most popular website for Ansible roles. Called Ansible Galaxy  https://galaxy.ansible.com/geerlingguy/apache. This is the link for Apache roles.
after download copy the role folder from the centralized location to your ansible folder
role for php: https://galaxy.ansible.com/geerlingguy/php_roles

** To create your own role, you need to create your 
- role folder: called `myapp` in this usecase
- create a tasks folder inside 
  - within this folder it is mandatory (MUST) to create a main.yml for your tasks. Ansible first looks at this file. 
- create a defaults folder# myapp-ansible

# myapp-ansible