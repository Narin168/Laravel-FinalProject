<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}

body {
    position: relative;
    width: 100%;
}

.header {
    height: 60px;
    width: 100%;
    display: flex;
    align-items: center;
    border-bottom: 2px solid #f1f1f1;
}

.logo {
    display: flex;
    align-items: center;
    width: 300px;
    padding-left: 40px;
}

.logo span {
    color: #5073fb;
}

.search--notification--profile {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: calc(100% - 300px);
    padding: 0 40px;
}

.search {
    background-color: #f1f4f8;
    border-radius: 50px;
    width: 400px;
    padding: 5px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.search input {
    background-color: transparent;
    outline: none;
    border: none;
    text-indent: 15px;
    width: 85%;
}

.search button {
    outline: none;
    border: none;
    border-radius: 50%;
    background-color: #fff;
    padding: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.search button i {
    font-size: 1.1rem;
    color: #5073fb;
}

.notification--profile {
    display: flex;
    align-items: center;
}

.picon {
    margin-left: 20px;
    font-size: 1.1rem;
    padding: 5px;
    border-radius: 5px;
}

.lock {
    color: #5073fb;
    background-color: rgba(80, 115, 251, .2);
}

.bell {
    color: #f1d243;
    background-color: rgba(241, 210, 67, .2);
}

.chat {
    color: #70d7a5;
    background-color: rgba(112, 215, 165, .2);
}

.profile {
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
}

img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.main {
    position: relative;
    width: 100%;
    min-height: calc(100vh - 60px);
}


/* sidebar */

.sidebar {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 300px;
    background-color: #fff;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-right: 2px solid #f1f1f1;
    transition: .3s;
}

.sidebar.active {
    width: 103px;
    overflow: hidden;
}

.sidebar.active .sidebar--item {
    display: none;
}

li {
    list-style: none;
}

a {
    text-decoration: none;
}

.sidebar--items a,
.sidebar--bottom-items a {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 1.1rem;
    color: #000;
    padding: 10px;
    border-radius: 10px;
}

.sidebar--items a:hover,
.sidebar--bottom-items a:hover {
    background-color: #5073fb;
    color: #fff;
}
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #ec1414;
}

#active--link {
    background-color: #5073fb;
    color: #fff;
}

.sidebar--bottom-items li:last-child a {
    margin-bottom: 0;
}

.icon {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    font-size: 1.3rem;
}

.icon-0 {
    color: #5073fb;
}

.icon-1 {
    color: #c5bc58;
}

.icon-2 {
    color: #a280e9;
}

.icon-3 {
    color: #85ade3;
}

.icon-4 {
    color: #e36ac8;
}

.icon-5 {
    color: #70d7a5;
}

.icon-6 {
    color: #5f5ce0;
}

.icon-7 {
    color: #e86786;
}

.icon-8 {
    color: #f1d243;
}


/* main--content */

.main--content {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: calc(100% - 300px);
    padding: 0 40px;
    overflow-y: scroll;
    transition: .3s;
}

.main--content.active {
    width: calc(100% - 103px);
}

.title {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px;
    margin-top: 30px;
}

.section--title {
    font-weight: 400;
}

.dropdown {
    outline: none;
    border: none;
    background-color: #f1f4f8;
    border-radius: 5px;
    width: 150px;
    padding: 5px;
}

.cards {
    display: flex;
    gap: 20px;
}

.card {
    padding: 20px;
    border-radius: 20px;
    min-width: 230px;
    height: auto;
    transition: .3s;
}

.card:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.card--data {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
}

.card h1 {
    font-size: 30px;
    margin-top: 10px;
}

.card--icon--lg {
    font-size: 80px;
}

.card--stats {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 5px;
}

.card--stats span {
    display: flex;
    align-items: center;
}

.card--icon {
    margin-right: 5px;
}

.stat--icon {
    color: #5f5ce0;
}

.up--arrow {
    color: #70d7a5;
}

.down--arrow {
    color: #e86786;
}

.card-1 {
    background-color: rgba(80, 115, 251, .1);
}

.card-1 .card--title {
    color: rgba(80, 115, 251, 1);
}

.card-1 .card--icon--lg {
    color: rgba(80, 115, 251, .4);
}

.card-2 {
    background-color: rgba(241, 210, 67, .1);
}

.card-2 .card--title {
    color: rgba(241, 210, 67, 1);
}

.card-2 .card--icon--lg {
    color: rgba(241, 210, 67, .4);
}

.card-3 {
    background-color: rgba(112, 215, 165, .1);
}

.card-3 .card--title {
    color: rgba(112, 215, 165, 1);
}

.card-3 .card--icon--lg {
    color: rgba(112, 215, 165, .4);
}

.card-4 {
    background-color: rgba(227, 106, 200, .1);
}

.card-4 .card--title {
    color: rgba(227, 106, 200, 1);
}

.card-4 .card--icon--lg {
    color: rgba(227, 106, 200, .4);
}


/* doctors */

.doctors--right--btns {
    display: flex;
    align-items: center;
    gap: 30px;
}

.add {
    display: flex;
    align-items: center;
    padding: 5px 10px;
    outline: none;
    border: none;
    background-color: #5073fb;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
    transition: .3s;
}

.add:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.add i {
    margin-right: 10px;
    padding: 5px;
    background-color: #fff;
    border-radius: 50%;
    color: #000;
}

.doctors--cards {
    display: flex;
    gap: 20px;
}

.doctor--card {
    padding: 20px;
    border-radius: 20px;
    height: auto;
    transition: .3s;
    border: 2px solid #f1f1f1;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: .8rem;
}

.doctor--card:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.img--box--cover {
    border: 1px solid #5073fb;
    padding: 2px;
    border-radius: 50%;
    display: inline-block;
    margin-bottom: 10px;
}

.img--box {
    position: relative;
    width: 71px;
    height: 71px;
    overflow: hidden;
    border-radius: 50%;
}

.free {
    color: #70d7a5;
}

.scheduled {
    color: #5073fb;
}


/* recent--patients */

.recent--patients {
    margin-bottom: 20px;
}

.table {
    height: 200px;
    overflow-y: scroll;
}

table {
    width: 100%;
    text-align: left;
    border-collapse: collapse;
}

tr {
    border-bottom: 1px solid #f1f1f1;
}

td,
th {
    padding-block: 10px;
}

.edit {
    color: #70d7a5;
    margin-right: 10px;
}

.delete {
    color: #e86786;
}

.pending {
    color: #f1d243;
}

.confirmed {
    color: #70d7a5;
}

.rejected {
    color: #e86786;
}


/* responsive starts here */

@media screen and (max-width:1350px) {
    .cards,
    .doctors--cards {
        overflow-x: scroll;
    }
}

@media screen and (max-width:1024px) {
    table {
        min-width: 600px;
    }
}

@media screen and (max-width:768px) {
    .logo {
        padding-left: 30px;
        width: fit-content;
    }
    .search--notification--profile {
        padding: 0 20px;
        margin-left: auto;
    }
    .main--content {
        padding: 0 20px;
    }
    .sidebar {
        padding: 20px;
    }
    .sidebar.active {
        width: 85px;
    }
    .main--content.active {
        width: calc(100% - 85px);
    }
}

@media screen and (max-width:590px) {
    .search,
    .lock,
    .chat {
        display: none;
    }
    .notification--profile {
        margin-left: auto;
    }
    .search--notification--profile {
        width: fit-content;
    }
    .sidebar {
        transform: translateX(-100%);
        z-index: 10;
        background-color: #fff;
    }
    .sidebar.active {
        transform: translateX(0);
        width: 300px;
    }
    .sidebar.active .sidebar--item {
        display: block;
    }
    .main--content {
        width: calc(100% - 0px);
    }
    .main--content.active {
        width: calc(100% - 0px);
    }
}

@media screen and (max-width:450px) {
    .doctor--filter {
        display: none;
    }
    .main--content {
        padding: 0 10px;
    }
    .logo {
        padding-left: 10px;
    }
    .search--notification--profile {
        padding: 0 10px;
    }
    .sidebar {
        padding: 10px;
    }
}
</style>