# -*- coding:utf-8 -*- 

# ----
# ---------------------------------------------------------
# Tsinghua Network Login Script (Command-Line Interface)
# ---------------------------------------------------------
# ----

# Usage : python netlogin.py, following the prompt


# Config Your Username & Password
import getpass
username = getpass.getpass("User: ")
password = getpass.getpass("Password: ")


import httplib, urllib
import hashlib

# Hash for your Password
m = hashlib.md5()
m.update(password)

# Params
params = urllib.urlencode({
    'username' : username,
    'password' : m.hexdigest(),
    'drop' : 0,
    'type' : 1,
    'n' : 100
    })



# Http Packet Headers
headers = {
        "Host" : "net.tsinghua.edu.cn",
        "Connection" : "keep-alive",
        "Content-Length" : str(71 + len(username)),
        "Origin" : "http://net.tsinghua.edu.cn",
        "User-Agent" : "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36",
        "Content-Type" : "application/x-www-form-urlencoded",
        "Accept" : "*/*",
        "Referer" : "http://net.tsinghua.edu.cn/wireless/",
        "Accept-Encoding" : "gzip,deflate,sdch",
        "Accept-Language" : "en-US,en;q=0.8,ja;q=0.6,zh-CN;q=0.4,zh-TW;q=0.2"
        }

conn = httplib.HTTPConnection("net.tsinghua.edu.cn")
conn.request("POST", "/cgi-bin/do_login", params, headers)
res = conn.getresponse()

# Result
print res.status, res.reason

# For test
#data = res.read()
#print data

# Close
conn.close()
