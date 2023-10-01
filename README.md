
# Kavenegar-PHP-Zabbix-SMS
Alert script for sending SMS in Zabbix via Kavenegar APIs.

## Requirements
You need to make an account on Kavenegar from <a href="https://panel.kavenegar.com/Client/Membership/Register">Here</a>
Then, you should pick API-KEY up from <a href="https://panel.kavenegar.com/client/setting/account">My Account</a> section.

## Installation
1. Copy all files to Zabbix "alertscripts" folder, usually located in this path:
```
/usr/lib/zabbix/alertscripts/
```

2. Set the "Read", "Write", and "Execute" permission (755) the "KavenegarSendSMS.php":
```
sudo chmod 755 /usr/lib/zabbix/alertscripts/KavenegarSendSMS.php
```

3. On Zabbix's side menu, open the **Allerts** > **Media types** and then click on **Create media type** button on top right corner.
   	- Set the **Name**
	- On the **Type**, Select the "**Script**"
 	- On the Script name, enter this script: "**KavenegarSendSMS.php**"
	- On the **Script parameters** add the parameters you need (same as screenshot). The parameters will be parsed to **$argv[1]**, **$argv[2]**, ... in **KavenegarSendSMS.php**, in the same order as they are added.
	- After setting **Message templates** and **Options**, Click the **Add** button.
![image](https://github.com/netmanir/Kavenegar-PHP-Zabbix-SMS/assets/2377381/298269b7-8325-4c13-858f-133feaaf1ff3)

4. Now you can test the script by clicking the **Test** button.
![image](https://github.com/netmanir/Kavenegar-PHP-Zabbix-SMS/assets/2377381/014b4405-b676-4fc9-bbbb-68b8fe59ec87)
   	- Enter test values for the parameters and then click the **Test** button.
	- You can check the API Calls here: <a href="https://panel.kavenegar.com/client/Developer/UserActivity">Developer/UserActivity</a>.

5. You can also use "Send" or "SendArray" instead of "VerifyLookup" by editing **KavenegarSendSMS.php** according to the <a href="https://kavenegar.com/rest.html">Kavenegar RESTful API Documentation</a>.

## Contribution
Bug fixes, docs, and enhancements welcome! Please let us know <a href="mailto:support@kavenegar.com?Subject=SDK" target="_top">support@kavenegar.com</a>
