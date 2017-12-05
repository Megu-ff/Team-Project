# Instructions:
# https://www.youtube.com/watch?v=XQgXKtPSzUI

#  If not Recknoised VVVVVVVV
# set PATH=%PATH%;C:\Python34\Scripts
# set PATH=%PATH%;C:\Python34


#pip install bs4
#python
import urllib
import bs4
from urllib.request import urlopen as uReq
from bs4 import BeautifulSoup as soup
from bs4 import BeautifulSoup as BSHTML

my_url = 'http://store.steampowered.com/'
page = 'http://store.steampowered.com/'
# opening connection, taking the page
uClient = uReq(my_url)
page_html = uClient.read()
uClient.close()

# Parsing
page_soup = soup(page_html,"html.parser")
 
# Grabs Each Product
containers = page_soup.findAll("div",{"id":"tab_topsellers_content"})

#Image Links
imgs = page_soup.findAll("div",{"id":"tab_content"})



# 1 Product

#container = containers[0]
#container.a

 
# ALl game titles

#title_container = container.findAll("div",{"class":"tab_item_name"})


# First Game

#product_name = title_container[0].text
#product_name[0].text


# First Price

#game_price =container.findAll("div,{"class":"discount_final_price"})
#game_price[0].text



#Loop 

filename = "games.xml"
f = open(filename, "w")

headers = "game, price, tag, tag2, tag3, tag4, image_link \n"

f.write(headers)



for container in containers:


#First Product

#Game Name
	title_container = container.findAll("div",{"class":"tab_item_name"})
	product_name = title_container[0].text
#Game Price
	game_price = container.findAll("div",{"class":"discount_final_price"})
	price =	game_price[0].text
#Tags
	game_tag = container.findAll("div",{"class":"tab_item_top_tags"})
	tag = game_tag[0].text
#Game ID
	#game_id = container.string for link in item.find_all(id='data-ds-appid')

#Image
game_image = container.findAll('img')[0].get('src')



print("game_name: " + product_name)
print("price: " + price)
print("tags: " + tag)
print("Game Link " + game_image)



f.write(product_name + "," + price.replace(",",".") + (",") + tag.replace(","," ") +(",")+ game_image + "\n"  )

#Second Product

	#title_container = container.findAll("div",{"class":"tab_item_name"})
	#product_name = title_container[1].text

	#game_price = container.findAll("div",{"class":"discount_final_price"})
	#price =	game_price[1].text

	#print("game_name: " + product_name)


	#f.write(product_name + "," + price.replace(",",".") + "\n"  )

	#print("price: " + price)


f.close()

