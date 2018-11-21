import time
from re import findall,sub
from lxml import html
from time import sleep
from selenium import webdriver	#This module provides all the web-driver implementations
from selenium.webdriver.common.keys import Keys	#The Keys class provides all the Keys in the Keyboard
from selenium.webdriver.support.wait import WebDriverWait
from selenium.common.exceptions import TimeoutException

driver = webdriver.Firefox()	#Instance of Firefox WebDriver is created
driver.get('http://localhost')	#navigate to the url
current = driver.find_element_by_id('home')
current.click()
time.sleep(2)
driver.find_element_by_id('about').click()
time.sleep(2)
driver.find_element_by_id('admissions').click()
time.sleep(2)
driver.find_element_by_id('training-courses').click()
time.sleep(2)
driver.find_element_by_id('blog').click()
time.sleep(2)

driver.find_element_by_link_text('Login Here').click()
time.sleep(4)

username = "Nikhil"
password = "Psss"
license = "MH0120110062821"
driver.find_element_by_name('Username').send_keys(username)
driver.find_element_by_name('Pass').send_keys(password)
driver.find_element_by_name('Licence_Number').send_keys(license)
login = driver.find_element_by_id('but')
login.click()
time.sleep(4)
driver.find_element_by_link_text('Logout').click()
time.sleep(4)
