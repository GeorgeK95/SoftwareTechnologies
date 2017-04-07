import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Scanner;

/**
 * Created by George-Lenovo on 4/7/2017.
 */
public class BookLibrary {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        Library library = new Library("Ivan Vazov");

        for (int i = 0; i < n; i++)
        {
            String[] bookInfo = in.nextLine().split(" ");

            String title = bookInfo[0];
            String author = bookInfo[1];
            String publisher= bookInfo[2];
          //  Date date = DateTime.ParseExact(bookInfo[3], "dd.MM.yyyy", CultureInfo.InvariantCulture);
            String ISBN = bookInfo[4];
            double price = Double.parseDouble(bookInfo[5]);

            Book book = new Book(title, author, publisher, new Date(), ISBN, price);

            AddCurrentBookToLibrary(book, library);
        }

        PrintLibrary(library);
    }

    private static void AddCurrentBookToLibrary(Book book, Library library)
    {
        boolean exists = false;

        for (int i = 0; i < library.books.size(); i++)
        {
            if (library.books.get(i).author.equals(book.author))
            {
                library.books.get(i).price += book.price;
                exists = true;
            }
        }

        if (!exists)
        {
            library.books.add(book);
        }
    }

    private static void PrintLibrary(Library library)
    {
        /*foreach (var book in library.books.OrderByDescending(x=>x.price).ThenBy(x=>x.author))
        {
            Console.WriteLine($"{book.author} -> {book.price:F2}");
        }*/
    }
}
class Library
{
    public String name;
    public List<Book> books;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public List<Book> getBooks() {
        return books;
    }

    public void setBooks(List<Book> books) {
        this.books = books;
    }

    public Library(String name)
    {
        this.name = name;
        this.books = new ArrayList<Book>();
    }

}
class Book
{
    public String title ;
    public String author;
    public String publisher;
    public Date releaseDate;
    public String ISBN ;
    public double price;

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getAuthor() {
        return author;
    }

    public void setAuthor(String author) {
        this.author = author;
    }

    public String getPublisher() {
        return publisher;
    }

    public void setPublisher(String publisher) {
        this.publisher = publisher;
    }

    public Date getReleaseDate() {
        return releaseDate;
    }

    public void setReleaseDate(Date releaseDate) {
        this.releaseDate = releaseDate;
    }

    public String getISBN() {
        return ISBN;
    }

    public void setISBN(String ISBN) {
        this.ISBN = ISBN;
    }

    public double getPrice() {
        return price;
    }

    public void setPrice(double price) {
        this.price = price;
    }

    public Book(String title, String author, String publisher, Date releaseDate, String ISBN, double price)
    {
        this.title = title;
        this.author = author;
        this.publisher = publisher;
        this.releaseDate = releaseDate;
        this.ISBN = ISBN;
        this.price = price;

    }


}
