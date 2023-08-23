#include <iostream>
#include <string>
#include <algorithm>

using namespace std;

bool is_palindrome(const string &word) {
    string reversed_word = word;
    reverse(reversed_word.begin(), reversed_word.end());
    return word == reversed_word;
}

void process_input() {
    string user_input;
    cout<<"Palindrome Test:\nEnter a word: ";
    cin>>user_input;

    if (is_palindrome(user_input)) {
        cout<<"The word is a palindrome."<<endl;
    } else {
        string reversed_word = user_input;
        reverse(reversed_word.begin(), reversed_word.end());
        cout<<"Reversed word: "<<reversed_word<<endl;
    }
}

int main() {
    process_input();
    return 0;
}

