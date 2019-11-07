from multiprocessing import Pool
import csv
from datetime import datetime
import requests
from bs4 import BeautifulSoup

def get_html(url):
    response = requests.get(url)
    return response.text

def get_all_links(html):
    soup = BeautifulSoup(html, 'lxml')
    tds = soup.find('ul', class_='entity').find_all('div', class_='media-body')
    links = []
    for td in tds:
        a = td.find('a').get('href')
        link = 'https://1ml.com' + a
        links.append(link)
    return links

def text_before_word(text, word):
    line = text.split(word)[0].strip()
    return line

def get_page_data(html):
    soup = BeautifulSoup(html, 'lxml')
    try:
        name = soup.find('h1').text
    except:
        name = ''
    try:
        price = soup.find('div', class_='panel-body').text.split('\n')
    except:
        price = ''
    data = {'name': name,
            'price': price}
    print(data)
    return data

def write_csv(data):
    with open('coinmarketcap.csv', 'a') as f:
        writer = csv.writer(f)
        writer.writerow((data['name'],
                         data['price']))

def make_all(link):
    html = get_html(link)
    data = get_page_data(html)
    write_csv(data)


def main():
    start = datetime.now()
    url = 'https://1ml.com/directory/payment/02509bac-fc91-4d60-b56a-f9b43fc5e1b6'
    all_links = get_all_links(get_html(url))

    with Pool(10) as p:
        p.map(make_all, all_links)

    end = datetime.now()
    total = end - start
    print(str(total))
    a = input()


if __name__ == '__main__':
    main()

 