  const product = [
    {
        id:0,
        title:"UNCAL ESB Key Features",
        text:"Many companies are looking for system to optimize their existing business processes, it has become an increasing challenge for company. UNCAL Digital Technology proudly presents",
        link:'Articles/Article1.html'
    },

    {
        id:1,
        title:"Why we should use system integration?",
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article2.html'
    },

    {
        id:2,
        title:"Business Intelligence",
        text:"In this globalization era, information is become an important component in daily life. Moreover, we have been facilitated by technological advances that make information very easy to obtain on various platforms",
        link:'Articles/Article3.html'
    },

    {
        id:3,
        title:'Making Indonesia 4.0',
        text:"We have entered the era of industrial revolution 4.0, it can't be avoided that Indonesia become one of them. Various technologies that marked the start of the 4.0 industrial revolution have begun in many fields",
        link:'Articles/Article4.html'
    },

    {
        id:4,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:5,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:6,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:7,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:8,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },
    {
        id:9,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:10,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:11,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:12,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:13,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },
    {
        id:14,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:15,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:16,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:17,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },

    {
        id:18,
        title:'Why we should use system integration?',
        text:"In this generation with the rapidly changing responsibilities and technology, and business wants to lead the industry, they need all their systems to work synchronously. However, System Integration is one of the best solutions",
        link:'Articles/Article1.html'
    },
];

const categories = [...new Set(product.map((item) => { return item }))]

document.getElementById('searchBar').addEventListener('keyup', (e) => {
    const searchData = e.target.value.toLowerCase();
    const filteredData = categories.filter((item) => {
        return (
            item.title.toLowerCase().includes(searchData) || item.text.toLowerCase().includes(searchData)
        )
    })
    displayItem(filteredData)
});

const displayItem = (items) => {
    document.getElementById('des').innerHTML = items.map((item) => {
        var { title, text, link } = item;
        return (
            `<div class='cards'>
                <div class='card-infos'>
                    <h3 class='text-start'>${title}</h3>
                    <p class='text-start'>${text}</p>
                    <a href='${link}' target='_blank'>Read More <i class='bi bi-arrow-right-circle-fill'></i></a>
                </div>
            </div>`
        )
    }).join('')
};
displayItem(categories);
