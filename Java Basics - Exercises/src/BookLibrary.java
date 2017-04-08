import java.util.*;

/**
 * Created by George-Lenovo on 4/7/2017.
 */
public class BookLibrary {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = Integer.parseInt(in.nextLine());
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

    private static void PrintLibrary(Library library) {
        List<Book> booksList = library.getBooks();

        Collections.sort(booksList, new Comparator<Book>() {
            @Override
            public int compare(Book o1, Book o2) {
                Double x1 = ((Book) o1).getPrice();
                Double x2 = ((Book) o2).getPrice();
                int sComp = x2.compareTo(x1);

                if (sComp != 0) {
                    return sComp;
                } else {
                    String y1 = ((Book) o2).getAuthor();
                    String y2 = ((Book) o1).getAuthor();
                    return y2.compareTo(y1);
                }
            }
        });

      //  System.out.println(1221);

        for (Book stud : booksList) {
            System.out.printf("%s -> %.2f%n", stud.getAuthor(), stud.getPrice());
        }


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
