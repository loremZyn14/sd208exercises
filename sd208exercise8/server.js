const express = require('express')

const app = express()
app.use(express.urlencoded({extended: true}))

const port = process.env.PORT || 3000


app.set('view engine','ejs')

var errors = []
const users = []
var loginUser= {}

app.get('/login',(req,res)=>{
    res.render('login',{
        errors : errors
    })
})
app.get('/',(req,res)=>{
    res.render('register',{
        errors : errors
    })
})
app.get('/dashboard',(req,res)=>{
    res.render('dashboard',{
        user : loginUser
    })
})
app.post('/register',(req,res)=>{
    errors = []
    if(req.body.email != req.body.email_confirm) errors.push("Email did not match")
    if(req.body.password != req.body.password_confirm) errors.push("Password did not match")
    if(errors.length) return res.redirect('/')

    users.push(req.body)
    res.redirect('/login')
})
app.post('/login',(req,res)=>{
    errors = []
    const user = users.find(user => user.email == req.body.email)
    if(!user){
        errors.push("email not found ")
        return res.redirect('/login')
    }
    if(user.password != req.body.password){
        errors.push("password did not match")
        return res.redirect('/login')
    }
    Object.assign(loginUser,user)
    res.redirect('/dashboard')
})

app.listen(port, console.log(`Server is running at http://localhost:${port}`))